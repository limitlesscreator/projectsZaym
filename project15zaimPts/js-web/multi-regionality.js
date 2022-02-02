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
            "astrakhan": {
                "city": "Астрахань",
                "inCity": "в Астрахани",
                "address": "Богдана Хмельницкого ул, д. 36"
            },
            "belgorod": {
                "city": "Белгород",
                "inCity": "в Белгороде",
                "address": "Михайловское ш, д. 31"
            },
            "staryyoskol": {
                "city": "Старый Оскол",
                "inCity": "в Старом Осколе",
                "address": "Солнечный мкр, д. 36"
            },
            "bryansk": {
                "city": "Брянск",
                "inCity": "в Брянске",
                "address": "Литейная ул, д. 68"
            },
            "volgograd": {
                "city": "Волгоград",
                "inCity": "в Волгограде",
                "address": "Чехова ул, д. 18"
            },
            "volzhskiy": {
                "city": "Волжский",
                "inCity": "в Волжском",
                "address": "просп. Ленина, 326 Г"
            },
            "vladimir": {
                "city": "Владимир",
                "inCity": "в Владимире",
                "address": "Горького ул, д. 65"
            },
            "velikiynovgorod": {
                "city": "Великий Новгород",
                "inCity": "в Великом Новгороде",
                "address": "Стратилатовская ул, д. 5"
            },
            "voronezh": {
                "city": "Воронеж",
                "inCity": "в Воронеже",
                "address": "Фридриха Энгельса ул, д. 25б"
            },
            "vologda": {
                "city": "Вологда",
                "address": "Чехова ул, д. 18",
                " inCity": "в Вологде"
            },
            "cherepovets": {
                "city": "Череповец",
                "inCity": "в Череповце",
                "address": "пер. Ухтомского, 5"
            },
            "dzerzhinsk": {
                "city": "Дзержинск",
                "inCity": "в Дзержинске",
                "address": "Красноармейская ул, д. 21"
            },
            "nizhniynovgorod": {
                "city": "Нижний Новгород",
                "inCity": "в Нижнем Новгороде",
                "address": "ул.Рождественская, 13, 2 этаж, 3 офис"
            },
            "kemerovo": {
                "city": "Кемерово",
                "inCity": "в Кемерово",
                "address": "ул. Пирогова, 32"
            },
            "novokuznetsk": {
                "city": "Новокузнецк",
                "inCity": "в Новокузнецке",
                "address": "Ленина пр-кт, д. 7"
            },
            "prokopyevsk": {
                "city": "Прокопьевск",
                "inCity": "в Прокопьевске",
                "address": "Ноградская ул., 28-а"
            },
            "krasnodar": {
                "city": "Краснодар",
                "inCity": "в Краснодаре",
                "address": "Северная, 490, БЦ Кутузовский, 1 этаж"
            },
            "sochi": {
                "city": "Сочи",
                "inCity": "в Сочи",
                "address": "Кубанская ул, д. 15"
            },
            "armavir": {
                "city": "Армавир",
                "inCity": "в Армавире",
                "address": "Мира ул, д. 24"
            },
            "novorossiysk": {
                "city": "Новороссийск",
                "inCity": "в Новороссийске",
                "address": "Пр-кт Дзержинского 183 (вход со стороны ул. Дзержинского)"
            },
            "kursk": {
                "city": "Курск",
                "inCity": "в Курске",
                "address": "Кулакова пр-кт, д. 24"
            },
            "stavropol": {
                "city": "Ставрополь",
                "inCity": "в Ставрополе",
                "address": "Ул. Доваторцев 49Б (на 2 этаже над сбербанком)"
            },
            "kurgan": {
                "city": "Курган",
                "inCity": "в Кургане",
                "address": "Машиностроителей пр-кт, д. 3в"
            },
            "chita": {
                "city": "Чита",
                "inCity": "в Чите",
                "address": "ул. Мостовая, 3"
            },
            "krasnoyarsk": {
                "city": "Красноярск",
                "inCity": "в Красноярске",
                "address": "Вильского ул, д. 22"
            },
            "norilsk": {
                "city": "Норильск",
                "inCity": "в Норильске",
                "address": "Молодежный проезд, д. 3"
            },
            "kostroma": {
                "city": "Кострома",
                "inCity": "в Костроме",
                "address": "Калиновская ул, д. 56"
            },
            "kirov": {
                "city": "Киров",
                "inCity": "в Кирове",
                "address": "Комсомольская ул, д. 50"
            },
            "cheboksary": {
                "city": "Чебоксары",
                "inCity": "в Чебоксарах",
                "address": "ул. Энгельса, 28"
            },
            "moskva": {
                "city": "Москва",
                "inCity": "в Москве",
                "address": "улица Ленинская Слобода, 19, 3 этаж, офис 3,034 (БЦ Омега Плаза)"
            },
            "balashikha": {
                "city": "Балашиха",
                "inCity": "в Балашихе",
                "address": "Фадеева ул, д. 5"
            },
            "elektrostal": {
                "city": "Электросталь",
                "inCity": "в Электростали",
                "address": "Красная ул, д. 30б"
            },
            "khimki": {
                "city": "Химки",
                "inCity": "в Химках",
                "address": "Московская ул, д. 3"
            },
            "krasnogorsk": {
                "city": "Красногорск",
                "inCity": "в Красногорске",
                "address": "Железнодорожный пер, д. 3"
            },
            "mytishchi": {
                "city": "Мытищи",
                "inCity": "в Мытищях",
                "address": "Осташковское ш, д. 1"
            },
            "korolev": {
                "city": "Королёв",
                "inCity": "в Королёве",
                "address": "Карла Маркса ул, д. 3"
            },
            "podolsk": {
                "city": "Подольск",
                "inCity": "в Подольске",
                "address": "Большая Серпуховская ул, д. 30"
            },
            "lyubertsy": {
                "city": "Люберцы",
                "inCity": "в Люберцах",
                "address": "Волковская ул, д. 11"
            },
            "saratov": {
                "city": "Саратов",
                "inCity": "в Саратове",
                "address": "Симбирская ул, д. 154"
            },
            "balakovo": {
                "city": "Балаково",
                "inCity": "в Балаково",
                "address": "ул. Минская, д.56"
            },
            "engels": {
                "city": "Энгельс",
                "inCity": "в Энгельсе",
                "address": "Петровская ул, д. 63"
            },
            "yuzhnosakhalinsk": {
                "city": "Южно-Сахалинск",
                "inCity": "в Южно-Сахалинске",
                "address": "пр. Мира, 239"
            },
            "yakutsk": {
                "city": "Якутск",
                "inCity": "в Якутске",
                "address": "Вилюйский тракт, 1"
            },
            "sanktpeterburg": {
                "city": "Санкт-Петербург",
                "inCity": "в Санкт-Петербурге",
                "address": "Пр-кт Маршала Блюхера 12 корпус 7, офис 1.1. (станция метро Лесная)"
            },
            "syktyvkar": {
                "city": "Сыктывкар",
                "inCity": "в Сыктывкаре",
                "address": "Интернациональная ул, д. 157"
            },
            "tomsk": {
                "city": "Томск",
                "inCity": "в Томске",
                "address": "Фрунзе пр-кт, д. 124"
            },
            "ulianovsk": {
                "city": "Ульяновск",
                "inCity": "в Ульяновске",
                "address": "Краснопролетарская ул, д. 16"
            },
            "ulan-ude": {
                "city": "Улан-Удэ",
                "inCity": "в Улан-Удэ",
                "address": "34, ул. Бабушкина"
            },
            "tyumen": {
                "city": "Тюмень",
                "inCity": "в Тюмене",
                "address": "Локомотивная ул, д. 116/2"
            },
            "tula": {
                "city": "Тула",
                "inCity": "в Туле",
                "address": "Красноармейский пр-кт, д. 11а"
            },
            "samara": {
                "city": "Самара",
                "inCity": "в Самаре",
                "address": "Лазо ул, д. 14"
            },
            "syzran": {
                "city": "Сызрань",
                "inCity": "в Сызрани",
                "address": "Ул. Гагарина 104 (жилой дом офис рядом с нотариусом)"
            },
            "toliatti": {
                "city": "Тольятти",
                "inCity": "в Тольятти",
                "address": "Революционная ул, д. 18а"
            },
            "salavat": {
                "city": "Салават",
                "inCity": "в Салавате",
                "address": "Монтажников б-р, д. 48/2"
            },
            "sterlitamak": {
                "city": "Стерлитамак",
                "inCity": "в Стерлитамаке",
                "address": "Коммунистическая ул, д. 84"
            },
            "ufa": {
                "city": "Уфа",
                "inCity": "в Уфе",
                "address": "ул Бакалинская 25"
            },
            "saransk": {
                "city": "Саранск",
                "inCity": "в Саранске",
                "address": "Веселовского ул, д. 31"
            },
            "khabarovsk": {
                "city": "Хабаровск",
                "inCity": "в Хабаровске",
                "address": "Большая ул, д. 2а"
            },
            "nizhnevartovsk": {
                "city": "Нижневартовск",
                "inCity": "в Нижневартовске",
                "address": "Северная ул., 19"
            },
            "severodvinsk": {
                "city": "Северодвинск",
                "inCity": "в Северодвинске",
                "address": "ул. Ломоносова, 71 А"
            },
            "arkhangelsk": {
                "city": "Архангельск",
                "inCity": "в Архангельске",
                "address": "Московский пр-кт, д. 25"
            },
            "yaroslavl": {
                "city": "Ярославль",
                "inCity": "в Ярославле",
                "address": "Толбухина пр-кт, д. 8/75"
            },
            "rybinsk": {
                "city": "Рыбинск",
                "inCity": "в Рыбинске",
                "address": "Герцена ул, д. 48а"
            },
            "ryazan": {
                "city": "Рязань",
                "inCity": "в Рязани",
                "address": "Маяковского ул, д. 1а"
            },
            "pskov": {
                "city": "Псков",
                "inCity": "в Пскове",
                "address": "Яна Фабрициуса ул, д. 10"
            },
            "tver": {
                "city": "Тверь",
                "inCity": "в Твери",
                "address": "Софьи Перовской ул, д. 28"
            },
            "tambov": {
                "city": "Тамбов",
                "inCity": "в Тамбове",
                "address": "Советская ул, д. 125"
            },
            "lipetsk": {
                "city": "Липецк",
                "inCity": "в Липецке",
                "address": "Победы пр-кт, д. 29"
            },
            "murmansk": {
                "city": "Мурманск",
                "inCity": "в Мурманске",
                "address": "Ленина пр-кт, д. 82"
            },
            "novosibirsk": {
                "city": "Новосибирск",
                "inCity": "в Новосибирске",
                "address": "ул. Коммунистическая 27/29"
            },
            "omsk": {
                "city": "Омск",
                "inCity": "в Омске",
                "address": "Серова ул, д. 19а"
            },
            "ivanovo": {
                "city": "Иваново",
                "inCity": "в Иваново",
                "address": "Ленина пр-кт, д. 108"
            },
            "chelyabinsk": {
                "city": "Челябинск",
                "inCity": "в Челябинске",
                "address": "Университетская Набережная ул, д. 66б"
            },
            "zlatoust": {
                "city": "Златоуст",
                "inCity": "в Златоусте",
                "address": "40-летия Победы ул, д. 20"
            },
            "magnitogorsk": {
                "city": "Магнитогорск",
                "inCity": "в Магнитогорске",
                "address": "Ленина пр-кт, д. 139"
            },
            "miass": {
                "city": "Миасс",
                "inCity": "в Миассе",
                "address": "Октября пр-кт, д. 21"
            },
            "ekaterinburg": {
                "city": "Екатеринбург",
                "inCity": "в Екатеринбурге",
                "address": "Ул. Ленина 25 ТЦ Европа 4 этаж оф 106 (вход через вторую дверь \"вертушкой\")"
            },
            "nizhniytagil": {
                "city": "Нижний Тагил",
                "inCity": "в Нижнем Тагиле",
                "address": "Строителей пр-кт, д. 16"
            },
            "kamensk-uralskiy": {
                "city": "Каменск-Уральский",
                "inCity": "в Каменске-Уральском",
                "address": "Кутузова ул, д. 27"
            },
            "orenburg": {
                "city": "Оренбург",
                "inCity": "в Оренбурге",
                "address": "Дзержинского пр-кт, д. 4"
            },
            "orsk": {
                "city": "Орск",
                "inCity": "в Орске",
                "address": "Мира пр-кт, д. 7"
            },
            "orel": {
                "city": "Орёл",
                "inCity": "в Орле",
                "address": "ул. Михалицина, 61"
            },
            "kaluga": {
                "city": "Калуга",
                "inCity": "в Калуге",
                "address": "Гагарина ул, д. 4"
            },
            "kaliningrad": {
                "city": "Калининград",
                "inCity": "в Калининграде",
                "address": "А.Невского ул, д. 193а"
            },
            "blagoveshchensk": {
                "city": "Благовещенск",
                "inCity": "в Благовещенске",
                "address": "Октябрьская ул, д. 173/1"
            },
            "perm": {
                "city": "Пермь",
                "inCity": "в Перми",
                "address": "ул. Петропаловская 41 оф 204"
            },
            "penza": {
                "city": "Пенза",
                "inCity": "в Пензе",
                "address": "Чехова ул, д. 3б"
            },
            "nakhodka": {
                "city": "Находка",
                "inCity": "в Находке",
                "address": "Находкинский пр-кт, д. 12"
            },
            "ussuriysk": {
                "city": "Уссурийск",
                "inCity": "в Уссурийске",
                "address": "ул. Ленина, 122"
            },
            "petropavlovsk-kamchatskiy": {
                "city": "Петропавловск-Камчатский",
                "inCity": "в Петропавловске-Камчатском",
                "address": "50 Лет Октября просп"
            },
            "petrozavodsk": {
                "city": "Петрозаводск",
                "inCity": "в Петрозаводске",
                "address": "Ленина пр-кт, д. 15"
            },
            "smolensk": {
                "city": "Смоленск",
                "inCity": "в Смоленске",
                "address": "Кловская ул, д. 19а"
            },
            "barnaul": {
                "city": "Барнаул",
                "inCity": "в Барнауле",
                "address": "Антона Петрова ул, д. 170"
            },
            "biysk": {
                "city": "Бийск",
                "inCity": "в Бийске",
                "address": "Вали Максимовой ул, д. 85/1"
            },
            "irkutsk": {
                "city": "Иркутск",
                "inCity": "в Иркутске",
                "address": "Советская ул, д. 136"
            },
            "angarsk": {
                "city": "Ангарск",
                "inCity": "в Ангарске",
                "address": "86-й кв-л, 1"
            },
            "bratsk": {
                "city": "Братск",
                "inCity": "в Братске",
                "address": "ул. Наймушина, 4"
            },
            "sevastopol": {
                "city": "Севастополь",
                "inCity": "в Севастополе",
                "address": "ул. Парковая, 29"
            },
            "simferopol": {
                "city": "Симферополь",
                "inCity": "в Симферополе",
                "address": "ул. Маяковского, 14"
            },
            "nalchik": {
                "city": "Нальчик",
                "inCity": "в Нальчике",
                "address": "ул. Ногмова, 75"
            },
            "kazan": {
                "city": "Казань",
                "inCity": "в Казани",
                "address": "ул.Пушкина 30, 2 этаж, офис 211"
            },
            "almetyevsk": {
                "city": "Альметьевск",
                "inCity": "в Альметьевске",
                "address": "Ленина ул, д. 60"
            },
            "nizhnekamsk": {
                "city": "Нижнекамск",
                "inCity": "в Нижнекамске",
                "address": "Южная ул, д. 3"
            },
            "naberezhnyyechelny": {
                "city": "Набережные челны",
                "inCity": "в Набережных челнах",
                "address": "Мира пр-кт, д. 8а"
            },
            "abakan": {
                "city": "Абакан",
                "inCity": "в Абакане",
                "address": "Тараса Шевченко ул, д. 62"
            },
            "yoshkar-ola": {
                "city": "Йошкар-Ола",
                "inCity": "в Йошкар-Оле",
                "address": "Комсомольская ул, д. 79"
            },
            "izhevsk": {
                "city": "Ижевск",
                "inCity": "в Ижевске",
                "address": "Воткинское шоссе, 162, оф.18"
            },
            "rostov-na-donu": {
                "city": "Ростов-на-Дону",
                "inCity": "в Ростове-на-Дону",
                "address": "Ул. Ленина 54, (рядом салон красоты \"Светлана\")"
            },
            "volgodonsk": {
                "city": "Волгодонск",
                "inCity": "в Волгодонске",
                "address": "Ленина ул, д. 45"
            },
            "aksay": {
                "city": "Аксай",
                "inCity": "в Аксае",
                "address": "пр. Ленина, 24"
            },
            "bataysk": {
                "city": "Батайск",
                "inCity": "в Батайске",
                "address": "Ул. Максима Горького 285Г"
            },
            "shakhty": {
                "city": "Шахты",
                "inCity": "в Шахтах",
                "address": "Победа Революции пр-т., 188"
            },
            "taganrog": {
                "city": "Таганрог",
                "inCity": "в Таганроге",
                "address": "ул. Москатова, 10-1"
            },
            "novocherkassk": {
                "city": "Новочеркасск",
                "inCity": "в Новочеркасске",
                "address": "Новочеркасское шоссе 1А (поворот на грушевку)"
            },
            "vladivostok": {
                "city": "Владивосток",
                "inCity": "в Владивостоке",
                "address": "ул. Батарейная, 3а, офис 310"
            },
            "surgut": {
                "city": "Сургут",
                "inCity": "в Сургуте",
                "address": "ул. Игоря Киртбая, 11"
            },
            "kerch": {
                "city": "Керчь",
                "inCity": "в Керчи",
                "address": "улица Ленина, 45"
            },
            "pyatigorsk": {
                "city": "Пятигорск",
                "inCity": "в Пятигорске",
                "address": "улица Ермолова, 28с2"
            },
            "kopeysk": {
                "city": "Копейск",
                "inCity": "в Копейске",
                "address": "проспект Ильича, 13"
            },
            "rubtsovsk": {
                "city": "Рубцовск",
                "inCity": "в Рубцовске",
                "address": "Комсомольская улица, 257"
            },
            "maykop": {
                "city": "Майкоп",
                "inCity": "в Майкопе",
                "address": "Краснооктябрьская ул., 50"
            },
            "kolomna": {
                "city": "Коломна",
                "inCity": "в Коломне",
                "address": "проспект Кирова, 28А/2"
            },
            "berezniki": {
                "city": "Березники",
                "inCity": "в Березниках",
                "address": "улица Карла Маркса, 53"
            },
            "domodedovo": {
                "city": "Домодедово",
                "inCity": "в Домодедово",
                "address": "улица Кирова, с28"
            },
            "kovrov": {
                "city": "Ковров",
                "inCity": "в Коврове",
                "address": "проспект Ленина, 35"
            },
            "odintsovo": {
                "city": "Одинцово",
                "inCity": "в Одинцово",
                "address": "Можайское ш., 71 ТЦ Дубрава"
            },
            "neftekamsk": {
                "city": "Нефтекамск",
                "inCity": "в Нефтекамске",
                "address": "улица Ленина, 46"
            },
            "kislovodsk": {
                "city": "Кисловодск",
                "inCity": "в Кисловодске",
                "address": "улица Тельмана, 5"
            },
            "nefteyugansk": {
                "city": "Нефтеюганск",
                "inCity": "в Нефтеюганске",
                "address": "5-й микрорайон, 6"
            },
            "novocheboksarsk": {
                "city": "Новочебоксарск",
                "inCity": "в Новочебоксарске",
                "address": "улица Семёнова, 37"
            },
            "shchelkovo": {
                "city": "Щёлково",
                "inCity": "в Щёлково",
                "address": "улица Комарова, 2"
            },
            "novomoskovsk": {
                "city": "Новомосковск",
                "inCity": "в Новомосковске",
                "address": "Комсомольская улица, 30"
            },
            "ramenskoye": {
                "city": "Раменское",
                "inCity": "в Раменском",
                "address": "улица Карла Маркса, 6"
            },
            "pervouralsk": {
                "city": "Первоуральск",
                "inCity": "в Первоуральске",
                "address": "улица Ватутина, 42"
            },
            "kyzyl": {
                "city": "Кызыл",
                "inCity": "в Кызыле",
                "address": "улица Кочетова, 53"
            },
            "orekhovozuyevo": {
                "city": "Орехово-Зуево",
                "inCity": "в Орехово-Зуеве",
                "address": "Центральный бульвар, 3"
            },
            "novyyurengoy": {
                "city": "Новый Уренгой",
                "inCity": "в Новом Уренгое",
                "address": "Ленинградский проспект, 8"
            },
            "obninsk": {
                "city": "Обнинск",
                "inCity": "в Обнинске",
                "address": "проспект Маркса, 50"
            },
            "nevinnomyssk": {
                "city": "Невинномысск",
                "inCity": "в Невинномысске",
                "address": "улица Гагарина, 17"
            },
            "dolgoprudnyy": {
                "city": "Долгопрудный",
                "inCity": "в Долгопрудном",
                "address": "Дирижабельная улица, 9"
            },
            "oktyabrskiy": {
                "city": "Октябрьский",
                "inCity": "в Октябрьском",
                "address": "проспект Ленина, 10"
            },
            "dimitrovgrad": {
                "city": "Димитровград",
                "inCity": "в Димитровграде",
                "address": "улица Хмельницкого, 112"
            },
            "essentuki": {
                "city": "Ессентуки",
                "inCity": "в Ессентуках",
                "address": "Советская улица, 24"
            },
            "kamyshin": {
                "city": "Камышин",
                "inCity": "в Камышине",
                "address": "Пролетарская улица, 70/1"
            },
            "evpatoriya": {
                "city": "Евпатория",
                "inCity": "в Евпатории",
                "address": "улица Пушкина, 16"
            },
            "reutov": {
                "city": "Реутов",
                "inCity": "в Реутове",
                "address": "улица Ленина, 14"
            },
            "zhukovskiy": {
                "city": "Жуковский",
                "inCity": "в Жуковском",
                "address": "улица Фрунзе, 9"
            },
            "pushkino": {
                "city": "Пушкино",
                "inCity": "в Пушкино",
                "address": "Московский проспект, 6"
            },
            "murom": {
                "city": "Муром",
                "inCity": "в Муроме",
                "address": "Московская улица, 14"
            },
            "noyabrsk": {
                "city": "Ноябрьск",
                "inCity": "в Ноябрьске",
                "address": "улица Ленина, 42"
            },
            "novoshakhtinsk": {
                "city": "Новошахтинск",
                "inCity": "в Новошахтинске",
                "address": "проспект Ленина, 7"
            },
            "seversk": {
                "city": "Северск",
                "inCity": "в Северске",
                "address": "улица Ленина, 40"
            },
            "artem": {
                "city": "Артём",
                "inCity": "в Артёме",
                "address": "улица Фрунзе, 54Г"
            },
            "achinsk": {
                "city": "Ачинск",
                "inCity": "в Ачинске",
                "address": "9-й микрорайон, 11"
            },
            "berdsk": {
                "city": "Бердск",
                "inCity": "в Бердске",
                "address": "улица Островского, 57"
            },
            "noginsk": {
                "city": "Ногинск",
                "inCity": "в Ногинске",
                "address": "Советская улица, 44"
            },
            "arzamas": {
                "city": "Арзамас",
                "inCity": "в Арзамасе",
                "address": "Соборная площадь, 2А"
            },
            "elista": {
                "city": "Элиста",
                "inCity": "в Элисте",
                "address": "улица А. Сусеева, 4"
            },
            "elets": {
                "city": "Елец",
                "inCity": "в Ельце",
                "address": "улица Мира, 92"
            },
            "khantymansiysk": {
                "city": "Ханты-Мансийск",
                "inCity": "в Ханты-Мансийске",
                "address": "улица Энгельса, 3"
            },
            "novokuybyshevsk": {
                "city": "Новокуйбышевск",
                "inCity": "в Новокуйбышевске",
                "address": "Коммунистическая улица, 39"
            },
            "zheleznogorsk": {
                "city": "Железногорск",
                "inCity": "в Железногорске",
                "address": "улица Ленина, 48к1"
            },
            "sergiyevposad": {
                "city": "Сергиев Посад",
                "inCity": "в Сергиевом Посаде",
                "address": "проспект Красной Армии, 131"
            },
            "zelenodolsk": {
                "city": "Зеленодольск",
                "inCity": "в Зеленодольске",
                "address": "улица Ленина, 21"
            }
        }


        if (data[result] !== undefined){
            document.querySelector(`#${data[result].city}`).click()
        }
    else {
            document.querySelector(`#Москва`).click()

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
// console.log('finished')
