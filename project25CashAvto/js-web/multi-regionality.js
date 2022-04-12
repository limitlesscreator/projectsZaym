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
        let result =  /:\/\/([^\/]+)/.exec(window.location.href)[1].split('.')[0]
        let data = {
          "kurgan": {
            "City": "Курган",
            "inCity": "Кургане",
            "address": "улица Гоголя, 83"
          },
          "shadrinsk": {
            "City": "Шадринск",
            "inCity": "Шадринске",
            "address": "Комсомольская улица, 24"
          },
          "asbest": {
            "City": "Асбест",
            "inCity": "Асбесте",
            "address": "Советская улица, 22"
          },
          "beryozovsky": {
            "City": "Берёзовский",
            "inCity": "Берёзовском",
            "address": "улица Красных Героев, 2Д"
          },
          "verkhnyayapyshma": {
            "City": "Верхняя Пышма",
            "inCity": "Верхней Пышме",
            "address": "улица Александра Козицына, 8"
          },
          "verkhnyayasalda": {
            "City": "Верхняя Салда",
            "inCity": "Верхней Салде",
            "address": "улица Сабурова, 6"
          },
          "yekaterinburg": {
            "City": "Екатеринбург",
            "inCity": "Екатеринбурге",
            "address": "ул. Вайнера, 10"
          },
          "kamenskuralsky": {
            "City": "Каменск-Уральский",
            "inCity": "Каменск-Уральском",
            "address": "улица Ленина, 28"
          },
          "kachkanar": {
            "City": "Качканар",
            "inCity": "Качканаре",
            "address": "улица Свердлова, 7Б"
          },
          "krasnoturyinsk": {
            "City": "Краснотурьинск",
            "inCity": "Краснотурьинске",
            "address": "улица Ленина, 25"
          },
          "krasnoufimsk": {
            "City": "Красноуфимск",
            "inCity": "Красноуфимске",
            "address": "Советская улица, 28"
          },
          "kushva": {
            "City": "Кушва",
            "inCity": "Кушве",
            "address": "улица Строителей, 13"
          },
          "lesnoy": {
            "City": "Лесной",
            "inCity": "Лесном",
            "address": "Коммунистический проспект, 23"
          },
          "nev'yansk": {
            "City": "Невьянск",
            "inCity": "Невьянске",
            "address": "Октябрьский проспект, 7"
          },
          "nizhnytagil": {
            "City": "Нижний Тагил",
            "inCity": "Нижнем Тагиле",
            "address": "проспект Ленина, 40"
          },
          "nizhnyayatura": {
            "City": "Нижняя Тура",
            "inCity": "Нижней Туре",
            "address": "улица Машиностроителей, 9"
          },
          "novouralsk": {
            "City": "Новоуральск",
            "inCity": "Новоуральске",
            "address": "улица Ленина, 56"
          },
          "pervouralsk": {
            "City": "Первоуральск",
            "inCity": "Первоуральске",
            "address": "улица Ватутина, 38"
          },
          "polevskoy": {
            "City": "Полевской",
            "inCity": "Полевском",
            "address": "Коммунистическая улица, 2"
          },
          "revda": {
            "City": "Ревда",
            "inCity": "Ревде",
            "address": "улица Максима Горького, 21"
          },
          "rezh": {
            "City": "Реж",
            "inCity": "Реже",
            "address": "улица Ленина, 7"
          },
          "severouralsk": {
            "City": "Североуральск",
            "inCity": "Североуральске",
            "address": "Молодёжная улица, 11"
          },
          "serov": {
            "City": "Серов",
            "inCity": "Серове",
            "address": "улица Заславского, 35"
          },
          "ishim": {
            "City": "Ишим",
            "inCity": "Ишиме",
            "address": "улица Карла Маркса, 31"
          },
          "tobolsk": {
            "City": "Тобольск",
            "inCity": "Тобольске",
            "address": "Октябрьская улица, 4"
          },
          "tyumen": {
            "City": "Тюмень",
            "inCity": "Тюмене",
            "address": "Первомайская улица, 11"
          },
          "yalutorovsk": {
            "City": "Ялуторовск",
            "inCity": "Ялуторовске",
            "address": "улица Ленина, 50"
          },
          "kogalym": {
            "City": "Когалым",
            "inCity": "Когалыме",
            "address": "улица Мира, 14"
          },
          "langepas": {
            "City": "Лангепас",
            "inCity": "Лангеласе",
            "address": "улица Ленина, 20"
          },
          "megion": {
            "City": "Мегион",
            "inCity": "Мегионе",
            "address": "Заречная улица, 15К2"
          },
          "nefteyugansk": {
            "City": "Нефтеюганск",
            "inCity": "Нефтеюганске",
            "address": "3-й микрорайон, 19"
          },
          "nizhnevartovsk": {
            "City": "Нижневартовск",
            "inCity": "Нижневартовске",
            "address": "улица Ленина, 9к1"
          },
          "nyagan": {
            "City": "Нягань",
            "inCity": "Нягане",
            "address": "4-й микрорайон, 15А"
          },
          "pytyakh": {
            "City": "Пыть-Ях",
            "inCity": "Пыть-Яхе",
            "address": "2-й микрорайон, 28"
          },
          "radyzniy": {
            "City": "Радужный",
            "inCity": "Радужном",
            "address": "1-й микрорайон, 45"
          },
          "surgut": {
            "City": "Сургут",
            "inCity": "Сургуте",
            "address": "проспект Ленина, 34"
          },
          "uray": {
            "City": "Урай",
            "inCity": "Урае",
            "address": "2-й микрорайон, 61"
          },
          "khantymansiysk": {
            "City": "Ханты-Мансийск",
            "inCity": "Ханты-Мансийске",
            "address": "улица Энгельса, 1"
          },
          "yugorsk": {
            "City": "Югорск",
            "inCity": "Югорске",
            "address": "улица 40 лет Победы, 6"
          },
          "verhniyufaley": {
            "City": "Верхний Уфалей",
            "inCity": "Верхнем Уфалее",
            "address": "улица Маяковского, 16"
          },
          "zlatoust": {
            "City": "Златоуст",
            "inCity": "Златоусте",
            "address": "улица Ленина, 3"
          },
          "kopeysk": {
            "City": "Копейск",
            "inCity": "Копейске",
            "address": "проспект Славы, 6"
          },
          "magnitogorsk": {
            "City": "Магнитогорск",
            "inCity": "Магнитогорске",
            "address": "улица имени Газеты Правда, 16"
          },
          "miass": {
            "City": "Миасс",
            "inCity": "Миассе",
            "address": "проспект Автозаводцев, 54"
          },
          "ozersk": {
            "City": "Озёрск",
            "inCity": "Озёрске",
            "address": "Уральская улица, 16"
          },
          "satka": {
            "City": "Сатка",
            "inCity": "Сатке",
            "address": "улица Кирова, 12"
          },
          "snezhinsk": {
            "City": "Снежинск",
            "inCity": "Снежинске",
            "address": "улица Ленина, 34"
          },
          "moscow": {
            "City": "Троицк",
            "inCity": "Троицке",
            "address": "улица имени В.И. Ленина, 69"
          },
          "ustkatav": {
            "City": "Усть-Катав",
            "inCity": "Усть-Катаве",
            "address": "улица Ленина, 43"
          },
          "chelyabinsk": {
            "City": "Челябинск",
            "inCity": "Челябинске",
            "address": "проспект Ленина, 58"
          },
          "gubkinsky": {
            "City": "Губкинский",
            "inCity": "Губкинском",
            "address": "5-й микрорайон, 11"
          },
          "nadym": {
            "City": "Надым",
            "inCity": "Надыме",
            "address": "Заводская улица, 5"
          },
          "novyurengoy": {
            "City": "Новый Уренгой",
            "inCity": "Новом Уренгое",
            "address": "Ленинградский проспект, 9"
          },
          "noyabrsk": {
            "City": "Ноябрьск",
            "inCity": "Ноябрьске",
            "address": "улица Ленина, 60"
          },
          "salekhard": {
            "City": "Салехард",
            "inCity": "Салехарде",
            "address": "улица Чубынина, 12"
          }
        }

        if (data[result] !== undefined) {
            document.querySelector(`#${data[result].city}`).click()
        } else {
            document.querySelector(`#Челябинск`).click()
        }
    },2000)

    for (let letter of ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Э', 'Ю', 'Я']) {
        if (!citiesLetters.hasOwnProperty(letter)) continue;
        let node = document.getElementById('root' + letter);
        if (!node) continue;

        ReactDOM.render(
            (
                <ul className="cities-ul hoverClass" aria-label="Close" itemScope="itemScope" itemType="http://schema.org/SiteNavigationElement">
                    {citiesLetters[letter].map(el => {
                        return (
                            <li onClick={(e) => {}} key={el.subdomain} className="cities-li">
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
