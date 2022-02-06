console.log('start js')
let xhr = new XMLHttpRequest();
xhr.open('GET', '/subdomains.json');
xhr.responseType = 'json';
xhr.send();
xhr.addEventListener('load', function () {
    let domain = window.location.host.split('.').slice(-2).join('.');

    let citiesLetters = [];
    for (let subdomain in xhr.response) {
        let city = xhr.response[subdomain].city;
        let letter = city[0].toUpperCase();
        if (!citiesLetters[letter]) {
            citiesLetters[letter] = [];
        }
        citiesLetters[letter].push({
            city: xhr.response[subdomain].city,
            subdomain: subdomain,
        });
    }
    setTimeout(() => {
        let siteUrl = window.location.hostname;
        console.log(siteUrl)
        let result =  /:\/\/([^\/]+)/.exec(window.location.href)[1].split('.')[0]
        let data = {
            "vyatskie-polyany": {
                "city": "Вятские Поляны",
                "inCity": "в Вятских Полянах",
                "address": "ул. Мира, 47"
            },
            "kirov": {
                "city": "Киров",
                "inCity": "в Кирове",
                "address": "ул. Карла Маркса, 62"
            },
            "kirovo-chepezk": {
                "city": "Кирово-Чепецк",
                "inCity": "в Кирово-Чепецке",
                "address": "пр. Россия, 18"
            },
            "arzamas": {
                "city": "Арзамас",
                "inCity": "в Арзамасе",
                "address": "ул. Карла Маркса, 7А"
            },
            "vyksa": {
                "city": "Выкса",
                "inCity": "в Выксе",
                "address": "ул. Красные Зори, 7А-7Б"
            },
            "dzerzhinsk": {
                "city": "Дзержинск",
                "inCity": "в Дзержинске",
                "address": "пр. Чкалова, 2"
            },
            "kstovo": {
                "city": "Кстово",
                "inCity": "в Кстово",
                "address": "ул. 40 лет Октября, 10"
            },
            "nizhniy-novgorod": {
                "city": "Нижний Новгород",
                "inCity": "в Нижнем Новгороде",
                "address": "Большая Покровская ул., 2"
            },
            "pavlovo": {
                "city": "Павлово",
                "inCity": "в Павлово",
                "address": "ул. Шмидта, 22"
            },
            "sarov": {
                "city": "Саров",
                "inCity": "в Сарове",
                "address": "пр. Ленина, 21"
            },
            "buzuluk": {
                "city": "Бузулук",
                "inCity": "в Бузулуке",
                "address": "ул. Чапаева, 43"
            },
            "guy": {
                "city": "Гай",
                "inCity": "в Гае",
                "address": "ул. Ленина, 46"
            },
            "novotroizk": {
                "city": "Новотроицк",
                "inCity": "в Новотроицке",
                "address": "Советская ул., 74"
            },
            "orenburg": {
                "city": "Оренбург",
                "inCity": "в Оренбурге",
                "address": "ул. 8 Марта, 42"
            },
            "orsk": {
                "city": "Орск",
                "inCity": "в Орске",
                "address": "пр. Мира, 26"
            },
            "kuznezk": {
                "city": "Кузнецк",
                "inCity": "в Кузнецке",
                "address": "Стекловская ул., 67"
            },
            "penza": {
                "city": "Пенза",
                "inCity": "в Пензе",
                "address": "ул. Кирова, 67"
            },
            "berezniki": {
                "city": "Березники",
                "inCity": "в Березниках",
                "address": "ул. Пятилетки, 39"
            },
            "lysva": {
                "city": "Лысьва",
                "inCity": "в Лысьве",
                "address": "пр. Победы, 50"
            },
            "perm": {
                "city": "Пермь",
                "inCity": "в Перми",
                "address": "Попова, 16"
            },
            "solikamsk": {
                "city": "Соликамск",
                "inCity": "в Соликамске",
                "address": "ул. 20-летия Победы, 117Б"
            },
            "chaikovskiy": {
                "city": "Чайковский",
                "inCity": "в Чайковском",
                "address": "ул. Карла Маркса, 24"
            },
            "belebey": {
                "city": "Белебей",
                "inCity": "в Белебее",
                "address": "Красная ул., 120"
            },
            "belorezk": {
                "city": "Белорецк",
                "inCity": "в Белорецке",
                "address": "ул. С. Тюленина, 6"
            },
            "ishimbay": {
                "city": "Ишимбай",
                "inCity": "в Ишимбае",
                "address": "Советская ул., 76"
            },
            "kumertau": {
                "city": "Кумертау",
                "inCity": "в Кумертау",
                "address": "ул. Карла Маркса, 26"
            },
            "meleuz": {
                "city": "Мелеуз",
                "inCity": "в Мелеузе",
                "address": "ул. Шлычкова, 44"
            },
            "neftekamsk": {
                "city": "Нефтекамск",
                "inCity": "в Нефтекамске",
                "address": "Парковая ул., 2Е"
            },
            "oktyabrskiy": {
                "city": "Октябрьский",
                "inCity": "в Октябрьском",
                "address": "ул. Свердлова, 35/7"
            },
            "sibay": {
                "city": "Сибай",
                "inCity": "в Сибае",
                "address": "ул. Маяковского, 22"
            },
            "sterlitamak": {
                "city": "Стерлитамак",
                "inCity": "в Стерлитамаке",
                "address": "ул. Артёма, 96"
            },
            "tuymazy": {
                "city": "Туймазы",
                "inCity": "в Туймазах",
                "address": "пр. Ленина, 8"
            },
            "ufa": {
                "city": "Уфа",
                "inCity": "в Уфе",
                "address": "ул. 50-летия Октября, 16"
            },
            "uchaly": {
                "city": "Учалы",
                "inCity": "в Учалах",
                "address": "ул. Ленина, 25"
            },
            "volzhsk": {
                "city": "Волжск",
                "inCity": "в Волжске",
                "address": "ул. Ленина, 61В"
            },
            "joshkar-ola": {
                "city": "Йошкар-Ола",
                "inCity": "в Йошкар-Оле",
                "address": "Первомайская ул., 115Е"
            },
            "ruzaevka": {
                "city": "Рузаевка",
                "inCity": "в Рузаевке",
                "address": "ул. Ленина, 37"
            },
            "saransk": {
                "city": "Саранск",
                "inCity": "в Саранске",
                "address": "ул. М. Расковой, 16Б"
            },
            "almetevsk": {
                "city": "Альметьевск",
                "inCity": "в Альметьевске",
                "address": "ул. Ленина, 100"
            },
            "bugulma": {
                "city": "Бугульма",
                "inCity": "в Бугульме",
                "address": "ул. Газинура Гафиатуллина, 27"
            },
            "kazan": {
                "city": "Казань",
                "inCity": "в Казане",
                "address": "ул. Мартына Межлаука, 22"
            },
            "naberezhnye-chelny": {
                "city": "Набережные Челны",
                "inCity": "в Набережных Челнах",
                "address": "ул. Сергея Титова, 36"
            },
            "nishnekamsk": {
                "city": "Нижнекамск",
                "inCity": "в Нижнекамске",
                "address": "пр. Строителей, 41"
            },
            "zhigulevsk": {
                "city": "Жигулёвск",
                "inCity": "в Жигулёвске",
                "address": "Московское шоссе, 18"
            },
            "syzran": {
                "city": "Сызрань",
                "inCity": "в Сызране",
                "address": "ул. Карла Маркса, 12А"
            },
            "toliatty": {
                "city": "Тольятти",
                "inCity": "в Тольятти",
                "address": "Революционная ул., 5"
            },
            "balakovo": {
                "city": "Балаково",
                "inCity": "в Балаково",
                "address": "Волжская ул., 100/1"
            },
            "balashov": {
                "city": "Балашов",
                "inCity": "в Балашове",
                "address": "ул. 30 лет Победы, 156"
            },
            "saratov": {
                "city": "Саратов",
                "inCity": "в Саратове",
                "address": "Большая Садовая ул., 153/163к3"
            },
            "engels": {
                "city": "Энгельс",
                "inCity": "в Энгельсе",
                "address": "пр. Фридриха Энгельса, 69"
            },
            "votkinsk": {
                "city": "Воткинск",
                "inCity": "в Воткинске",
                "address": "Школьная ул., 13"
            },
            "glazov": {
                "city": "Глазов",
                "inCity": "в Глазове",
                "address": "ул. Короленко, 1"
            },
            "izhevsk": {
                "city": "Ижевск",
                "inCity": "в Ижевске",
                "address": "ул. Кирова, 109"
            },
            "sarapul": {
                "city": "Сарапул",
                "inCity": "в Сарапуле",
                "address": "ул. Азина, 103"
            },
            "dimitrovgrad": {
                "city": "Димитровград",
                "inCity": "в Димитровграде",
                "address": "пр. Ленина, 16"
            },
            "ulyanovsk": {
                "city": "Ульяновск",
                "inCity": "в Ульяновске",
                "address": "Московское шоссе, 91"
            },
            "novocheboksarsk": {
                "city": "Новочебоксарск",
                "inCity": "в Новочебоксарске",
                "address": "ул. Винокурова, 46"
            },
            "cheboksary": {
                "city": "Чебоксары",
                "inCity": "в Чебоксарах",
                "address": "ул. Ленинского Комсомола, 21А"
            },
            "shumerlya": {
                "city": "Шумерля",
                "inCity": "в Шумерле",
                "address": "ул. Карла Маркса, 32А"
            }
        }
        console.log(result)
        document.querySelector(`#${data[result].city}`).click()
        // console.log(data['kirov'])



        // if (localStorage.getItem('mapCity')){
        //     const clickCity = localStorage.getItem('mapCity')
        //     console.log(clickCity)
        //     document.querySelector(`#${clickCity}`).click()
        // }
        // else {
        //     const clickCity = "Самара"
        //     localStorage.setItem('mapCity','Самара')
        //     console.log(clickCity)
        //     document.querySelector(`#${clickCity}`).click()
        // }
        // console.log(document.cookie)
        // //cookie
        // if (document.cookie){
        //     const clickCity = document.cookie
        //     console.log(`cookie is ${clickCity}`)
        //     document.querySelector(`#${clickCity}`).click()
        // }
        // else {
        //     const clickCity = "Самара"
        //     document.cookie = clickCity
        //     console.log(clickCity)
        //     document.querySelector(`#${clickCity}`).click()
        // }


    },2000)

    for (let letter of ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Э', 'Ю', 'Я']) {
        if (!citiesLetters.hasOwnProperty(letter)) continue;
        let node = document.getElementById('root' + letter);
        if (!node) continue;

        ReactDOM.render(
            (
            <ul  className="cities-ul hoverClass" aria-label="Close" itemScope="itemScope" itemType="http://schema.org/SiteNavigationElement">
            {citiesLetters[letter].map(el => {
                    return (
                        <li onClick={(e) => {
                    }} key={el.subdomain} className="cities-li">
                        <a href={window.location.protocol + '//' + el.subdomain + '.' + domain + window.location.pathname + window.location.search} className="cities-a" itemProp="url"> {el.city}</a>
                        </li>
                )
                })}
            </ul>
    ),
        node
    );
    }
});
console.log('end js')
