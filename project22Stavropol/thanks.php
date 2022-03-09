<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    ini_set('display_errors', 'on');
    setlocale(LC_ALL, 'ru_RU.UTF8');

    /* Punycode */
    class OutOfBoundsCustomException extends \RuntimeException {}
    class DomainOutOfBoundsException extends OutOfBoundsCustomException {}
    class LabelOutOfBoundsException extends OutOfBoundsCustomException {}
    class Punycode { const BASE = 36; const TMIN = 1; const TMAX = 26; const SKEW = 38; const DAMP = 700; const INITIAL_BIAS = 72; const INITIAL_N = 128; const PREFIX = 'xn--'; const DELIMITER = '-'; protected static $encodeTable = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ); protected static $decodeTable = array( 'a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4, 'f' => 5, 'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9, 'k' => 10, 'l' => 11, 'm' => 12, 'n' => 13, 'o' => 14, 'p' => 15, 'q' => 16, 'r' => 17, 's' => 18, 't' => 19, 'u' => 20, 'v' => 21, 'w' => 22, 'x' => 23, 'y' => 24, 'z' => 25, '0' => 26, '1' => 27, '2' => 28, '3' => 29, '4' => 30, '5' => 31, '6' => 32, '7' => 33, '8' => 34, '9' => 35 ); protected $encoding; public function __construct($encoding = 'UTF-8') { $this->encoding = $encoding; } public function encode($input) { $input = mb_strtolower($input, $this->encoding); $parts = explode('.', $input); foreach ($parts as &$part) { $length = strlen($part); if ($length < 1) { throw new LabelOutOfBoundsException(sprintf('The length of any one label is limited to between 1 and 63 octets, but %s given.', $length)); } $part = $this->encodePart($part); } $output = implode('.', $parts); $length = strlen($output); if ($length > 255) { throw new DomainOutOfBoundsException(sprintf('A full domain name is limited to 255 octets (including the separators), %s given.', $length)); } return $output; } protected function encodePart($input) { $codePoints = $this->listCodePoints($input); $n = static::INITIAL_N; $bias = static::INITIAL_BIAS; $delta = 0; $h = $b = count($codePoints['basic']); $output = ''; foreach ($codePoints['basic'] as $code) { $output .= $this->codePointToChar($code); } if ($input === $output) { return $output; } if ($b > 0) { $output .= static::DELIMITER; } $codePoints['nonBasic'] = array_unique($codePoints['nonBasic']); sort($codePoints['nonBasic']); $i = 0; $length = mb_strlen($input, $this->encoding); while ($h < $length) { $m = $codePoints['nonBasic'][$i++]; $delta = $delta + ($m - $n) * ($h + 1); $n = $m; foreach ($codePoints['all'] as $c) { if ($c < $n || $c < static::INITIAL_N) { $delta++; } if ($c === $n) { $q = $delta; for ($k = static::BASE;; $k += static::BASE) { $t = $this->calculateThreshold($k, $bias); if ($q < $t) { break; } $code = $t + (($q - $t) % (static::BASE - $t)); $output .= static::$encodeTable[$code]; $q = ($q - $t) / (static::BASE - $t); } $output .= static::$encodeTable[$q]; $bias = $this->adapt($delta, $h + 1, ($h === $b)); $delta = 0; $h++; } } $delta++; $n++; } $out = static::PREFIX . $output; $length = strlen($out); if ($length > 63 || $length < 1) { throw new LabelOutOfBoundsException(sprintf('The length of any one label is limited to between 1 and 63 octets, but %s given.', $length)); } return $out; } public function decode($input) { $input = strtolower($input); $parts = explode('.', $input); foreach ($parts as &$part) { $length = strlen($part); if ($length > 63 || $length < 1) { throw new LabelOutOfBoundsException(sprintf('The length of any one label is limited to between 1 and 63 octets, but %s given.', $length)); } if (strpos($part, static::PREFIX) !== 0) { continue; } $part = substr($part, strlen(static::PREFIX)); $part = $this->decodePart($part); } $output = implode('.', $parts); $length = strlen($output); if ($length > 255) { throw new DomainOutOfBoundsException(sprintf('A full domain name is limited to 255 octets (including the separators), %s given.', $length)); } return $output; } protected function decodePart($input) { $n = static::INITIAL_N; $i = 0; $bias = static::INITIAL_BIAS; $output = ''; $pos = strrpos($input, static::DELIMITER); if ($pos !== false) { $output = substr($input, 0, $pos++); } else { $pos = 0; } $outputLength = strlen($output); $inputLength = strlen($input); while ($pos < $inputLength) { $oldi = $i; $w = 1; for ($k = static::BASE;; $k += static::BASE) { $digit = static::$decodeTable[$input[$pos++]]; $i = $i + ($digit * $w); $t = $this->calculateThreshold($k, $bias); if ($digit < $t) { break; } $w = $w * (static::BASE - $t); } $bias = $this->adapt($i - $oldi, ++$outputLength, ($oldi === 0)); $n = $n + (int) ($i / $outputLength); $i = $i % ($outputLength); $output = mb_substr($output, 0, $i, $this->encoding) . $this->codePointToChar($n) . mb_substr($output, $i, $outputLength - 1, $this->encoding); $i++; } return $output; } protected function calculateThreshold($k, $bias) { if ($k <= $bias + static::TMIN) { return static::TMIN; } elseif ($k >= $bias + static::TMAX) { return static::TMAX; } return $k - $bias; } protected function adapt($delta, $numPoints, $firstTime) { $delta = (int) ( ($firstTime) ? $delta / static::DAMP : $delta / 2 ); $delta += (int) ($delta / $numPoints); $k = 0; while ($delta > ((static::BASE - static::TMIN) * static::TMAX) / 2) { $delta = (int) ($delta / (static::BASE - static::TMIN)); $k = $k + static::BASE; } $k = $k + (int) (((static::BASE - static::TMIN + 1) * $delta) / ($delta + static::SKEW)); return $k; } protected function listCodePoints($input) { $codePoints = array( 'all' => array(), 'basic' => array(), 'nonBasic' => array(), ); $length = mb_strlen($input, $this->encoding); for ($i = 0; $i < $length; $i++) { $char = mb_substr($input, $i, 1, $this->encoding); $code = $this->charToCodePoint($char); if ($code < 128) { $codePoints['all'][] = $codePoints['basic'][] = $code; } else { $codePoints['all'][] = $codePoints['nonBasic'][] = $code; } } return $codePoints; } protected function charToCodePoint($char) { $code = ord($char[0]); if ($code < 128) { return $code; } elseif ($code < 224) { return (($code - 192) * 64) + (ord($char[1]) - 128); } elseif ($code < 240) { return (($code - 224) * 4096) + ((ord($char[1]) - 128) * 64) + (ord($char[2]) - 128); } else { return (($code - 240) * 262144) + ((ord($char[1]) - 128) * 4096) + ((ord($char[2]) - 128) * 64) + (ord($char[3]) - 128); } } protected function codePointToChar($code) { if ($code <= 0x7F) { return chr($code); } elseif ($code <= 0x7FF) { return chr(($code >> 6) + 192) . chr(($code & 63) + 128); } elseif ($code <= 0xFFFF) { return chr(($code >> 12) + 224) . chr((($code >> 6) & 63) + 128) . chr(($code & 63) + 128); } else { return chr(($code >> 18) + 240) . chr((($code >> 12) & 63) + 128) . chr((($code >> 6) & 63) + 128) . chr(($code & 63) + 128); } } }
    /* END Punycode */

    $Punycode = new Punycode();

    /** @var string $order_hash Хэш из данных заявки + сегодняшней даты + часа */
    $order_hash = md5(json_encode($_POST) . date('dmYH'));

    /** POST запрос */
    if (
        $_SERVER['REQUEST_METHOD'] == 'POST' &&
        $_POST &&
        ($_SESSION['order_hash'] ?? '') != $order_hash // условие: хэш не повторяется с хэшем прошлого запроса
    ) {
        $_POST['domain'] = $_SERVER['HTTP_REFERER'];

        $ch = curl_init('https://carzaem.ru/api/v1/order30sites');
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Token: eNTeREdnIFICEBoSpeRA',
            ],
            CURLOPT_POSTFIELDS => json_encode($_POST, JSON_UNESCAPED_UNICODE),
        ]);
        curl_exec($ch);

        if (curl_getinfo($ch, CURLINFO_RESPONSE_CODE) < 300) {
            $_SESSION['order_hash'] = $order_hash;
        } else {
            echo '<h1>Ошибка отправки заявки. Попробуйте позднее</h1><script>setTimeout(function(){window.location.href="/";},8000);</script>';
            exit;
        }

    /** Любой запрос, кроме POST или повторяющаяся заявка */
    } else {
        header('Location: /');
        exit;
    }
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за заявку</title>
    <style>
        html { font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif }
        html, body, .container {
            height: 100%;
            background-color: #edeef0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .block {
            background-color: #fff;
            padding: 25px;
            border-radius: 3px;
            box-shadow: 0 2px 1px rgba(0,0,0,.1);
        }
        .text-center { text-align: center }
        h1 { margin: 0 }
        #timer {
            font-size: 3em;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="block text-center">
            <h1>Спасибо за заявку</h1>
            <p>
                Мы свяжемся с Вами с течение часа.<br>
                <em>Если Вы оставили заявку в рабочее время.</em>
            </p>
            <div id="timer"></div>
            <a href="/">Вернуться на сайт</a>
        </div>
    </div>
    <script>
        let timer = document.querySelector('#timer');
        let time = 3600;
        let interval = setInterval(function () {
            time--;
            if (time <= 0) clearInterval(interval);
            let h = Math.floor(time / 60);
            let m = time - (h * 60);
            h = h > 9 ? h : ('0' + h);
            m = m > 9 ? m : ('0' + m);
            timer.innerText = h + ':' + m;
        }, 1000);
    </script>
</body>
</html>
