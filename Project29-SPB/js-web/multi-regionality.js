// console.log('start js')
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
        // console.log(siteUrl)
        let result = /:\/\/([^\/]+)/.exec(window.location.href)[1].split('.')[0]
        let data = {
            "volkhov": {
                "city": "Волхов",
                "inCity": "Волхове",
                "address": "Кировский проспект, 26А"
            },
            "vsevolozhsk": {
                "city": "Всеволожск",
                "inCity": "Всеволожске",
                "address": "Всеволожский проспект, 61"
            },
            "vyborg": {
                "city": "Выборг",
                "inCity": "Выборге",
                "address": "улица Водного Колодца, 1"
            },
            "gatchina": {
                "city": "Гатчина",
                "inCity": "Гатчине",
                "address": "улица 7-й Армии, 22А"
            },
            "kingisepp": {
                "city": "Кингисепп",
                "inCity": "Кингисеппе",
                "address": "Большая Советская улица, 14"
            },
            "kirishi": {
                "city": "Кириши",
                "inCity": "Киришах",
                "address": "Волховская набережная, 34"
            },
            "kirovsk": {
                "city": "Кировск",
                "inCity": "Кировске",
                "address": "Набережная улица, 15"
            },
            "luga": {
                "city": "Луга",
                "inCity": "Луге",
                "address": "переулок Толмачёва, 3А"
            },
            "podporozhye": {
                "city": "Подпорожье",
                "inCity": "Подпорожье",
                "address": "Свирская улица, 66"
            },
            "priozersk": {
                "city": "Приозерск",
                "inCity": "Приозерске",
                "address": "улица Ленина, 30В"
            },
            "sankt-peterburg": {
                "city": "Пушкин",
                "inCity": "Пушкине",
                "address": "Железнодорожная улица, 81"
            },
            "slantsy": {
                "city": "Сланцы",
                "inCity": "Сланцах",
                "address": "улица Ленина, 18"
            },
            "sosnovy bor": {
                "city": "Сосновый Бор",
                "inCity": "Сосновом Боре",
                "address": "улица Красных Фортов, 10А"
            },
            "tikhvin": {
                "city": "Тихвин",
                "inCity": "Тихвине",
                "address": "улица Карла Маркса, 50"
            },
            "tosno": {
                "city": "Тосно",
                "inCity": "Тосно",
                "address": "Вокзальная улица, 16"
            },
            "arkhangel'sk": {
                "city": "Архангельск",
                "inCity": "Архангельске",
                "address": "улица Гагарина, 46"
            },
            "kotlas": {
                "city": "Котлас",
                "inCity": "Котласе",
                "address": "улица Кузнецова, 8"
            },
            "severodvinsk": {
                "city": "Северодвинск",
                "inCity": "Северодвинске",
                "address": "Беломорский проспект, 18"
            },
            "vologda": {
                "city": "Вологда",
                "inCity": "Вологде",
                "address": "улица Мира, 3"
            },
            "cherepovets": {
                "city": "Череповец",
                "inCity": "Череповце",
                "address": "улица Ленина, 84"
            },
            "kaliningrad": {
                "city": "Калининград",
                "inCity": "Калининграде",
                "address": "Ленинский проспект, 30"
            },
            "sovetsk": {
                "city": "Советск",
                "inCity": "Советске",
                "address": "улица Победы, 18"
            },
            "apatity": {
                "city": "Апатиты",
                "inCity": "Апатитах",
                "address": "улица Ферсмана, 23"
            },
            "kandalaksha": {
                "city": "Кандалакша",
                "inCity": "Кандалакше",
                "address": "улица Пронина, 17А"
            },
            "monchegorsk": {
                "city": "Мончегорск",
                "inCity": "Мончегорске",
                "address": "Комсомольская улица, 21"
            },
            "murmansk": {
                "city": "Мурманск",
                "inCity": "Мурманске",
                "address": "проспект Ленина, 32"
            },
            "olenegorsk": {
                "city": "Оленегорск",
                "inCity": "Оленегорске",
                "address": "Строительная улица, 47"
            },
            "naryan-mar": {
                "city": "Нарьян-Мар",
                "inCity": "Нарьян-Маре",
                "address": "Оленная улица, 10"
            },
            "borovichi": {
                "city": "Боровичи",
                "inCity": "Боровичах",
                "address": "проезд Гагарина, 1"
            },
            "veliky novgorod": {
                "city": "Великий Новгород",
                "inCity": "Великом Новгороде",
                "address": "ул. Ломоносова, 29"
            },
            "staraya russa": {
                "city": "Старая Русса",
                "inCity": "Старой Руссе",
                "address": "улица Восстания, 1А"
            },
            "velikiye luki": {
                "city": "Великие Луки",
                "inCity": "Великих Луках",
                "address": "улица Некрасова, 18/7литВ"
            },
            "pskov": {
                "city": "Псков",
                "inCity": "Пскове",
                "address": "Рижский проспект, 17"
            },
            "kondopoga": {
                "city": "Кондопога",
                "inCity": "Кондопоге",
                "address": "проспект Калинина, 20"
            },
            "kostomuksha": {
                "city": "Костомукша",
                "inCity": "Костомукше",
                "address": "бульвар Лазарева, 6"
            },
            "petrozavodsk": {
                "city": "Петрозаводск",
                "inCity": "Петрозаводске",
                "address": "проспект Ленина, 14"
            },
            "segezha": {
                "city": "Сегежа",
                "inCity": "Сегеже",
                "address": "улица 8 Марта, 9"
            },
            "sortavala": {
                "city": "Сортавала",
                "inCity": "Сортавале",
                "address": "Промышленная улица, 32"
            },
            "vorkuta": {
                "city": "Воркута",
                "inCity": "Воркуте",
                "address": "улица Ленина, 53А"
            },
            "inta": {
                "city": "Инта",
                "inCity": "Инте",
                "address": "улица Бабушкина, 1"
            },
            "pechora": {
                "city": "Печора",
                "inCity": "Печоре",
                "address": "Печорский проспект, 78А"
            },
            "syktyvkar": {
                "city": "Сыктывкар",
                "inCity": "Сыктывкаре",
                "address": "Октябрьский проспект, 141"
            },
            "usinsk": {
                "city": "Усинск",
                "inCity": "Усинске",
                "address": "Молодёжная улица, 2"
            },
            "ukhta": {
                "city": "Ухта",
                "inCity": "Ухте",
                "address": "Октябрьская улица, 38"
            }
        }


        if (data[result] !== undefined) {
            document.querySelector(`#${data[result].city}`).click()
        } else {
            document.querySelector(`#Санкт-Петербург`).click()

        }
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


    }, 2000)

    for (let letter of ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Э', 'Ю', 'Я']) {
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
console.log('finished')
