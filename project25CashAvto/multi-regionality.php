<?php

/**
 * Необходимость обновлять файл с поддоменами
 * @var bool $updateable
 */
$updateable = true;


/**
 * Язык поддоменов: en, ru
 * @var string $lang ru или en
 */
$lang = 'en'; // en ru


/**********************************/


if (basename(__FILE__) == $_SERVER['SCRIPT_NAME']) {
    http_response_code(403);
    exit;
}


setlocale(LC_ALL, "ru_RU.UTF8");


/* Punycode */
class OutOfBoundsCustomException extends \RuntimeException {}
class DomainOutOfBoundsException extends OutOfBoundsCustomException {}
class LabelOutOfBoundsException extends OutOfBoundsCustomException {}
class Punycode { const BASE = 36; const TMIN = 1; const TMAX = 26; const SKEW = 38; const DAMP = 700; const INITIAL_BIAS = 72; const INITIAL_N = 128; const PREFIX = 'xn--'; const DELIMITER = '-'; protected static $encodeTable = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ); protected static $decodeTable = array( 'a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4, 'f' => 5, 'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9, 'k' => 10, 'l' => 11, 'm' => 12, 'n' => 13, 'o' => 14, 'p' => 15, 'q' => 16, 'r' => 17, 's' => 18, 't' => 19, 'u' => 20, 'v' => 21, 'w' => 22, 'x' => 23, 'y' => 24, 'z' => 25, '0' => 26, '1' => 27, '2' => 28, '3' => 29, '4' => 30, '5' => 31, '6' => 32, '7' => 33, '8' => 34, '9' => 35 ); protected $encoding; public function __construct($encoding = 'UTF-8') { $this->encoding = $encoding; } public function encode($input) { $input = mb_strtolower($input, $this->encoding); $parts = explode('.', $input); foreach ($parts as &$part) { $length = strlen($part); if ($length < 1) { throw new LabelOutOfBoundsException(sprintf('The length of any one label is limited to between 1 and 63 octets, but %s given.', $length)); } $part = $this->encodePart($part); } $output = implode('.', $parts); $length = strlen($output); if ($length > 255) { throw new DomainOutOfBoundsException(sprintf('A full domain name is limited to 255 octets (including the separators), %s given.', $length)); } return $output; } protected function encodePart($input) { $codePoints = $this->listCodePoints($input); $n = static::INITIAL_N; $bias = static::INITIAL_BIAS; $delta = 0; $h = $b = count($codePoints['basic']); $output = ''; foreach ($codePoints['basic'] as $code) { $output .= $this->codePointToChar($code); } if ($input === $output) { return $output; } if ($b > 0) { $output .= static::DELIMITER; } $codePoints['nonBasic'] = array_unique($codePoints['nonBasic']); sort($codePoints['nonBasic']); $i = 0; $length = mb_strlen($input, $this->encoding); while ($h < $length) { $m = $codePoints['nonBasic'][$i++]; $delta = $delta + ($m - $n) * ($h + 1); $n = $m; foreach ($codePoints['all'] as $c) { if ($c < $n || $c < static::INITIAL_N) { $delta++; } if ($c === $n) { $q = $delta; for ($k = static::BASE;; $k += static::BASE) { $t = $this->calculateThreshold($k, $bias); if ($q < $t) { break; } $code = $t + (($q - $t) % (static::BASE - $t)); $output .= static::$encodeTable[$code]; $q = ($q - $t) / (static::BASE - $t); } $output .= static::$encodeTable[$q]; $bias = $this->adapt($delta, $h + 1, ($h === $b)); $delta = 0; $h++; } } $delta++; $n++; } $out = static::PREFIX . $output; $length = strlen($out); if ($length > 63 || $length < 1) { throw new LabelOutOfBoundsException(sprintf('The length of any one label is limited to between 1 and 63 octets, but %s given.', $length)); } return $out; } public function decode($input) { $input = strtolower($input); $parts = explode('.', $input); foreach ($parts as &$part) { $length = strlen($part); if ($length > 63 || $length < 1) { throw new LabelOutOfBoundsException(sprintf('The length of any one label is limited to between 1 and 63 octets, but %s given.', $length)); } if (strpos($part, static::PREFIX) !== 0) { continue; } $part = substr($part, strlen(static::PREFIX)); $part = $this->decodePart($part); } $output = implode('.', $parts); $length = strlen($output); if ($length > 255) { throw new DomainOutOfBoundsException(sprintf('A full domain name is limited to 255 octets (including the separators), %s given.', $length)); } return $output; } protected function decodePart($input) { $n = static::INITIAL_N; $i = 0; $bias = static::INITIAL_BIAS; $output = ''; $pos = strrpos($input, static::DELIMITER); if ($pos !== false) { $output = substr($input, 0, $pos++); } else { $pos = 0; } $outputLength = strlen($output); $inputLength = strlen($input); while ($pos < $inputLength) { $oldi = $i; $w = 1; for ($k = static::BASE;; $k += static::BASE) { $digit = static::$decodeTable[$input[$pos++]]; $i = $i + ($digit * $w); $t = $this->calculateThreshold($k, $bias); if ($digit < $t) { break; } $w = $w * (static::BASE - $t); } $bias = $this->adapt($i - $oldi, ++$outputLength, ($oldi === 0)); $n = $n + (int) ($i / $outputLength); $i = $i % ($outputLength); $output = mb_substr($output, 0, $i, $this->encoding) . $this->codePointToChar($n) . mb_substr($output, $i, $outputLength - 1, $this->encoding); $i++; } return $output; } protected function calculateThreshold($k, $bias) { if ($k <= $bias + static::TMIN) { return static::TMIN; } elseif ($k >= $bias + static::TMAX) { return static::TMAX; } return $k - $bias; } protected function adapt($delta, $numPoints, $firstTime) { $delta = (int) ( ($firstTime) ? $delta / static::DAMP : $delta / 2 ); $delta += (int) ($delta / $numPoints); $k = 0; while ($delta > ((static::BASE - static::TMIN) * static::TMAX) / 2) { $delta = (int) ($delta / (static::BASE - static::TMIN)); $k = $k + static::BASE; } $k = $k + (int) (((static::BASE - static::TMIN + 1) * $delta) / ($delta + static::SKEW)); return $k; } protected function listCodePoints($input) { $codePoints = array( 'all' => array(), 'basic' => array(), 'nonBasic' => array(), ); $length = mb_strlen($input, $this->encoding); for ($i = 0; $i < $length; $i++) { $char = mb_substr($input, $i, 1, $this->encoding); $code = $this->charToCodePoint($char); if ($code < 128) { $codePoints['all'][] = $codePoints['basic'][] = $code; } else { $codePoints['all'][] = $codePoints['nonBasic'][] = $code; } } return $codePoints; } protected function charToCodePoint($char) { $code = ord($char[0]); if ($code < 128) { return $code; } elseif ($code < 224) { return (($code - 192) * 64) + (ord($char[1]) - 128); } elseif ($code < 240) { return (($code - 224) * 4096) + ((ord($char[1]) - 128) * 64) + (ord($char[2]) - 128); } else { return (($code - 240) * 262144) + ((ord($char[1]) - 128) * 4096) + ((ord($char[2]) - 128) * 64) + (ord($char[3]) - 128); } } protected function codePointToChar($code) { if ($code <= 0x7F) { return chr($code); } elseif ($code <= 0x7FF) { return chr(($code >> 6) + 192) . chr(($code & 63) + 128); } elseif ($code <= 0xFFFF) { return chr(($code >> 12) + 224) . chr((($code >> 6) & 63) + 128) . chr(($code & 63) + 128); } else { return chr(($code >> 18) + 240) . chr((($code >> 12) & 63) + 128) . chr((($code >> 6) & 63) + 128) . chr(($code & 63) + 128); } } }
/* END Punycode */


/**
 * Log errors to file ./php-errors.log
 *
 * @param string $text
 * @return void
 */
function writelog(string $text) {
    $logfile = __DIR__ . '/php-errors.log';
    $saved_file = file_put_contents($logfile, date('H:i:s | ') . $text . PHP_EOL, FILE_APPEND);
    if (($saved_file === false) || ($saved_file == -1)) {
        exit("Couldn't save log to file {$logfile}");
    }
}


/* Error handlers */
set_error_handler(function (int $errno, string $errstr, string $errfile = null, int $errline = null, array $errcontext = null) {
    writelog('Error | ' . $errstr . ' in ' . $errfile . ':' . $errline);
    return true;
}, E_ALL & ~E_NOTICE);


set_exception_handler(function ($e) {
    writelog('Exception | ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
    return true;
});
/* END Error handlers */


/**
 * Send Telegram message to notifications chat
 *
 * @param string $message
 * @return void
 */
function telegram_notification(string $message) {
    $chat_id = -1001588546560;

    // Message text
    $allowed_tags = '<b><strong><i><em><u><ins><s><strike><del><a><code><pre>';
    $text = strip_tags($message, $allowed_tags);

    $ch = curl_init('https://api.telegram.org/bot5086059366:AAGpbGKSWThVhvngfx2LO0-AVVbeyuWTAIE/sendMessage');
    $response_body = json_encode([
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => 'html',
    ]);
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
        ],
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $response_body,
        CURLOPT_RETURNTRANSFER => true,
    ]);

    $response = curl_exec($ch);

    // Response errors handler
    $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($response_code >= 300) {
        $warning_text = implode(PHP_EOL, [
            "REQUEST BODY: {$response_body}",
            '',
            "RESPONSE CODE: {$response_code}",
            "RESPONSE BODY: {$response}"
        ]);
        file_put_contents(__DIR__ . '/warning-telegram_' . date('Y-m-d_H:i:s') . '.log', $warning_text);
    }
}

/* config */
$source_url = 'http://77.246.159.54/bigbrother/subdomains' . (in_array($lang, ['ru', 'en']) ? "-{$lang}" : '') . '.json'; // займ-птс.рус
$domains_filename = 'subdomains.json';
$domains_file = __DIR__ . '/' . $domains_filename;

$is_exists = file_exists($domains_file);
$is_outdated = $updateable && !$is_exists || filemtime($domains_file) + 86400 < time();
/* END config */


/* Update domains file */
if ($is_outdated) {

    /* Fetch file */
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $source_url,
        CURLOPT_RETURNTRANSFER => true,
    ]);
    $body = curl_exec($ch);

    /* Test: is returned json */
    $is_json = true;
    try {
        json_decode($body);
    } catch (\Exception $e) {
        $is_json = false;
    }

    /**
     * Log errors, if exists:
     * - bad response code
     * - response body is not json
     * - can't update file and file doesn't exists locally
     */
    $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($response_code != 200 || !$is_json) {
        $warnings = [
            "Domain: <a href=\"http://{$_SERVER['HTTP_HOST']}\">{$_SERVER['HTTP_HOST']}</a>",
            "Action: download newly {$domains_filename} file from {$source_url}",
        ];
        if ($response_code != 200) {
            $warnings[] = "- <a href=\"http://{$source_url}\">source</a> response code is {$response_code}";
        }
        if (!$is_json) {
            $warnings[] = "- downloaded file is not json, not updated";
        }
        if (!$is_exists) {
            $warnings[] = "- {$domains_filename} does not exists locally";
        }
        telegram_notification(implode(PHP_EOL, $warnings));
    }

    /* Update file */
    else {
        file_put_contents($domains_file, $body);
    }
}
/* END Update domains file */


/* Setup city variables */
$domain_dots_count = substr_count($_SERVER['HTTP_HOST'], '.');
$variables = [];
if ($is_exists && $domain_dots_count > 1) {
    $domain = (new Punycode)->decode($_SERVER['HTTP_HOST']);
    $subdomain = explode('.', $domain)[0];

    $subdomains = json_decode(file_get_contents($domains_file), true);
    if ($subdomains[$subdomain] ?? false) {
        $city = $subdomains[$subdomain]['city'];
        $in_city = $subdomains[$subdomain]['inCity'];
        $address = $subdomains[$subdomain]['address'];
    } else {
        $city = 'Челябинск';
        $in_city = 'в Челябинске';
        $address = 'Университетская Набережная ул, д. 66б';
    }
}
else {
    $city = 'Челябинск';
    $in_city = 'в Челябинске';
    $address = 'Университетская Набережная ул, д. 66б';
}
/* END Setup city variables */


/* Unset variables for run template clearly */
foreach (['source_url', 'domains_filename', 'domains_file', 'is_exists', 'is_outdated', 'ch', 'body', 'is_json', 'response_code', 'warnings', 'domain_dots_count', 'lang'] as $var) {
    unset($$var);
}
unset($var);


/**
 * Variables in template:
 *
 * @var string $city       Название города (по домену)
 * @var string $in_city    Название города в предложном падеже (по домену)
 * @var string $address    Адрес офиса (по домену)
 * @var string $domain     Домен (юникод)
 * @var string $subdomain  Поддомен (первая часть домена до точки, юникод)
 * @var string $subdomains Массив со всеми поддоменами
 */
