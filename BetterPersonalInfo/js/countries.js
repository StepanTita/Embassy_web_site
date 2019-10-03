var countries = [
  "Канада", "Перу", "Італія", "Франція", 
  "Швеція", "Іспанія", "Японія", "Австралія", 
  "Аргентина", "Латвія", "США", "Німеччина", 
  "Азербайджан", "Греція", "Турція", "Україна"]
var dct = {
    "Канада" : [
      "Нунавут",
      "Нью-Брансуик",
      "Ньюфаундленд и Лабрадор",
      "Онтарио",
      "Остров Принца Эдуарда",
      "Саскачеван",
      "Северо-Западные территории",
      "Юкон"
    ],
    "Перу" : [
      "Амазонас",
      "Анкаш",
      "Апурімак",
      "Арекіпа",
      "Аякучо",
      "Кахамарка",
      "Каяо",
      "Куско",
      "Уанкавеліка",
      "Уануко",
      "Іка",
      "Хунін",
      "Ла-Лібертад",
      "Ламбаєке",
      "Ліма",
      "Лорето",
      "Мадре-де-Дьйос",
      "Мокеґуа",
      "Паско",
      "П'юра",
      "Пуно",
      "Сан-Мартін",
      "Такна",
      "Тумбес",
      "Укаялі",
    ],
    "Італія" : [
      "Абруцци",
      "Валле-д’Аоста",
      "Апулия",
      "Базиликата",
      "Калабрия",
      "Кампания",
      "Эмилия-Романья",
      "Фриули — Венеция-Джулия",
      "Лацио",
      "Лигурия",
      "Ломбардия",
      "Марке",
      "Молизе",
      "Пьемонт",
      "Сардиния",
      "Сицилия",
      "Трентино — Альто-Адидже",
      "Тоскана",
      "Умбрия",
      "Венеция"
    ],
    "Франція" : [
      "Аквитания",
      "Бретань",
      "Бургундия",
      "Иль де Франс",
      "Корсика",
      "Лазурный берег",
      "Лангедок-Русильон",
      "Лимузен",
      "Лотарингия",
      "Миди Пиренеи",
      "Норд-па-де-Кале Нормандия Верхняя",
      "Нормандия Нижняя ",
      "Овернь",
      "Прованс",
      "Пикардия",
      "Пуату-Шаранта",
      "Пэи-де-ла-Луар",
      "Рона-Альпы",
      "Франш-Конте",
      "Центр",
      "Шампань-Арденны",
      "Эльзас"
    ],
    "Швеція" : [
      "Гёталанд",
      "Свеаланд",
      "Норрланд"
    ],
    "Іспанія" : [
      "Андалусия",
      "Арагон",
      "Астурия",
      "Балеарские острова",
      "Валенсия",
      "Галисия",
      "Канарские острова",
      "Кантабрия",
      "Кастилия — Ла-Манча",
      "Кастилия и Леон",
      "Каталония",
      "Мадрид",
      "Мурсия",
      "Наварра",
      "Риоха",
      "Страна Басков",
      "Эстремадура"
    ],
    "Японія" : [
      "Айти",
      "Акита",
      "Аомори",
      "Вакаяма",
      "Гифу",
      "Гумма",
      "Ибараки",
      "Иватэ",
      "Исикава",
      "Кагава",
      "Кагосима",
      "Канагава",
      "Киото",
      "Коти",
      "Кумамото",
      "Миэ",
      "Мияги",
      "Мядзаки",
      "Нагано",
      "Нагасаки",
      "Нара",
      "Ниигата",
      "Оита",
      "Окаяма",
      "Окинава",
      "Осака",
      "Сага",
      "Сайтама",
      "Сига",
      "Сидзуока",
      "Симане",
      "Тиба",
      "Токио",
      "Токусима",
      "Тотиги",
      "Тоттори",
      "Тояма",
      "Фукуи",
      "Фукуока",
      "Фукусима",
      "Хёго",
      "Хиросима",
      "Хоккайдо",
      "Эхиме",
      "Ямагата",
      "Ямагути",
      "Яманаси"
    ],
    "Австралія" : [
      "Столичная страна",
      "Восточные штаты",
      "Бассейн озера Эри",
      "Бассейн Муррей—Дарлинг",
      "Равнина Налларбор",
      "Аутбэк",
      "Санрейзия",
      "Страна каналов"
    ],
    "Аргентина" : [
      "Пампасы",
      "Куйо",
      "Аргентинский северо-запад",
      "Междуречье",
      "Гран-Чако",
      "Патагония"
    ],
    "Латвія" : [
      "Курземе",
      "Видземе",
      "Латгале"
    ],
    "США" : [
      "Айдахо",
      "Айова",
      "Алабама",
      "Аляска",
      "Аризона",
      "Арканзас",
      "Вайоминг",
      "Вашингтон",
      "Вермонт",
      "Вирджиния",
      "Висконсин",
      "Гавайи",
      "Делавэр",
      "Джорджия",
      "Западная Вирджиния",
      "Иллинойс",
      "Индиана",
      "Калифорния",
      "Канзас",
      "Кентукки",
      "Колорадо",
      "Коннектикут",
      "Луизиана",
      "Массачусетс",
      "Миннесота",
      "Миссисипи",
      "Миссури",
      "Мичиган",
      "Монтана",
      "Мэн",
      "Мэриленд",
      "Небраска",
      "Невада",
      "Нью-Гэмпшир",
      "Нью-Джерси",
      "Нью-Йорк",
      "Нью-Мексико",
      "Огайо",
      "Оклахома",
      "Орегон",
      "Пенсильвания",
      "Род-Айленд",
      "Северная Дакота",
      "Северная Каролина",
      "Теннесси",
      "Техас",
      "Флорида",
      "Южная Дакота",
      "Южная Каролина",
      "Юта"
    ],
    "Німеччина" : [
      "Земля Баден–Вюртемберг",
      "Свободное государство Бавария",
      "Земля Берлин",
      "Земля Бранденбург",
      "Свободный ганзейский город Бремен",
      "Свободный ганзейский город Гамбургмля Гессен",
      "Земля Мекленбург",
      "Земля Нижняя Саксония",
      "Земля Северный Рейн–Вестфалия",
      "Земля Рейнланд–Пфальц",
      "Земля Саар",
      "Свободное государство Саксония",
      "Земля Саксония–Анхальт",
      "Земля Шлезвиг–Гольштейн",
      "Свободное государство Тюрингия",
    ],
    "Азербайджан" : [
      "Баку",
      "Гянджа",
      "Евлах",
      "Ленкорань",
      "Мингечаур",
      "Нафталан",
      "Нахичевань",
      "Ханкенди",
      "Сумгаит",
      "Шеки",
      "Ширван",
      "Шуша"
    ],
    "Греція" : [
      "Аттика",
      "Македония",
      "Эпир и Западная Македониия",
      "Фессалия и Центральная Греция",
      "Пелопоннес, Западная Греция и Иониия",
      "Эгейские острова",
      "Крит",
      "Автономное монашеское государство Святой Горы",
    ],
    "Турція" : [
      "Эгейский регион",
      "Черноморский регион",
      "Центральная Анатолия",
      "Восточная Анатолия",
      "Мраморноморский регион",
      "Средиземноморский регион",
      "Юго-Восточная Анатолия"
    ],
    "Україна" : [
      "Автономна республіка Крим ",
      "Вінницька область",
      "Волинська область", 
    "Дніпропетровська область",
      "Донецька область",
      "Житомирська область", 
      "Закарпатська область", 
      "Запорізька область", 
      "Івано-Франківська область", 
      "Київська область", 
      "Кіровоградська область", 
      "Луганська область", 
      "Львівська область", 
      "Миколаївська область", 
      "Одеська область", 
      "Полтавська область", 
      "Рівненська область", 
      "Сумська область", 
      "Тернопільська область", 
      "Харківська область", 
      "Херсонська область", 
      "Хмельницька область", 
      "Черкаська область", 
      "Чернівецька область", 
      "Чернігівська область"
    ]
  };
  //create STATES array for autocomplete
  var states = []
  for(let i = 0; i < countries.length; ++i)
  {
    let temp = dct[countries[i]];
    for(let j = 0; j < temp.length; ++j)
    {
      states.push(temp[j]);
    }
  }