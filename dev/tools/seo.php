<?

$GLOBALS['SEO_CITIES'] = [
    'surgut' => [
        'Сургут',
        'Сургуте'
    ],
    'tyumen' => [
        'Тюмень',
        'Тюмени'
    ],
    'noyabrsk' => [
        'Ноябрьск',
        'Ноябрьске'
    ],
    'moscow' => [
        'Москва',
        'Москве'
    ],
    'moscow' => [
        'Москва',
        'Москве'
    ],
    'spb' => [
        'Санкт-Петербург',
        'Санкт-Петербурге',
    ]
];

function getCity()
{
    $city = '';
    try {
        if (!isset($GLOBALS['CITY'])) {
            $segment = getFirstURLSegment();

            if ($segment && isset($GLOBALS['SEO_CITIES'][$segment])) {
                $GLOBALS['CITY'] = $segment;
                $city = $segment;
            }
        } else {
            $city = $GLOBALS['CITY'];
        }
    } catch (\Throwable $th) {
        //throw $th;
    }

    return $city;
}

function getCityURL()
{
    if ($city = getCity()) {
        return '/' . $city;
    }
    return '';
}

function getCitySEO()
{
    $city = getCity();
    if ($city && $GLOBALS['SEO_CITIES'][$city]) return $GLOBALS['SEO_CITIES'][$city];
    return [];
}

function getCanonical() {
    return CURRENT_URL . preg_replace("/\?.*/", "", $_SERVER["REQUEST_URI"]);
}

if (!isset($GLOBALS['SEO_TITLE'])) {
    $citySEO = getCitySEO();
    $GLOBALS['SEO_TITLE'] = 'Alexandrov.Digital';
}

if (!isset($GLOBALS['SEO_DESCRIPTION'])) {
    $GLOBALS['SEO_DESCRIPTION'] = 'Alexandrov.Digital';
}
