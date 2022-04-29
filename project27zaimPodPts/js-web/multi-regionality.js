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
        let result =  /:\/\/([^\/]+)/.exec(window.location.href)[1].split('.')[0]
        let data = {
          "belgorod": {
          "city": "Белогорск",
          "inCity": "Белогорске",
          "address": "улица Кирова, 84"
        },
        "blagoveshchensk": {
          "city": "Благовещенск",
          "inCity": "Благовещенске",
          "address": "улица Ленина, 139"
        },
        "svobodny": {
          "city": "Свободный",
          "inCity": "Свободном",
          "address": "улица Карла Маркса, 16"
        },
        "tynda": {
          "city": "Тында",
          "inCity": "Тынде",
          "address": "улица Красная Пресня, 27/1"
        },
        "chita": {
          "city": "Чита",
          "inCity": "Чите",
          "address": "улица Бутина, 37"
        },
        "petropavlovsk-kamchatskiy": {
          "city": "Петропавловск-Камчатский",
          "inCity": "Петропавловске-Камчатском",
          "address": "Советская улица, 14"
        },
        "magadan": {
          "city": "Магадан",
          "inCity": "Магадане",
          "address": "улица Пушкина, 1"
        },
        "arsenyev": {
          "city": "Арсеньев",
          "inCity": "Арсеньеве",
          "address": "Калининская улица, 14"
        },
        "artyom": {
          "city": "Артём",
          "inCity": "Артёме",
          "address": "улица Фрунзе, 73"
        },
        "vladivostok": {
          "city": "Владивосток",
          "inCity": "Владивостоке",
          "address": "Светланская улица, 31"
        },
        "dalnegorsk": {
          "city": "Дальнегорск",
          "inCity": "Дальнегорске",
          "address": "проспект 50 лет Октября, 73"
        },
        "nakhodka": {
          "city": "Находка",
          "inCity": "Находкае",
          "address": "Находкинский проспект, 11"
        },
        "ussuriysk": {
          "city": "Уссурийск",
          "inCity": "Уссурийске",
          "address": "улица Плеханова, 61"
        },
        "severobaykalsk": {
          "city": "Северобайкальск",
          "inCity": "Северобайкальске",
          "address": "Ленинградский проспект, 6"
        },
        "ulan-ude": {
          "city": "Улан-Удэ",
          "inCity": "Улан-Удэ",
          "address": "улица Ленина, 52"
        },
        "neryungri": {
          "city": "Нерюнгри",
          "inCity": "Нерюнгри",
          "address": "проспект Дружбы Народов, 25"
        },
        "yakutsk": {
          "city": "Якутск",
          "inCity": "Якутске",
          "address": "улица Аммосова, 6"
        },
        "yuzhno-sakhalinsk": {
          "city": "Южно-Сахалинск",
          "inCity": "Южно-Сахалинске",
          "address": "улица Карла Маркса, 51Б"
        },
        "amursk": {
          "city": "Амурск",
          "inCity": "Амурске",
          "address": "улица Ленина, 279"
        },
        "komsomolsk-on-amur": {
          "city": "Комсомольск-на-Амуре",
          "inCity": "Комсомольске-на-Амуре",
          "address": "проспект Ленина, 19"
        },
        "khabarovsk": {
          "city": "Хабаровск",
          "inCity": "Хабаровске",
          "address": "улица Пушкина, 54"
        }
        }


        if (data[result] !== undefined){
            document.querySelector(`#${data[result].city}`).click()
        }
        else {
            document.querySelector(`#Хабаровск`).click()

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


    },2000)

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
