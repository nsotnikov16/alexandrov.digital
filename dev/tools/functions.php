<?

function message_to_telegram(string $text)
{
    if (!defined('TELEGRAM_TOKEN') || !defined('TELEGRAM_CHATID')) return;
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    return curl_exec($ch);
}

function checkUrl(string $url)
{
    return strpos($_SERVER['REQUEST_URI'], $url) !== false;
}

function getFirstURLSegment(): string
{
    try {
        $url = $_SERVER['REQUEST_URI'];
        $parsed = parse_url($url);
        $path = $parsed['path'];
        $path_parts = explode('/', $path);
        return $path_parts[1];
    } catch (\Throwable $th) {
        //throw $th;
    }

    return '';
}

function getHrefForPhone($phone)
{
    $replace = preg_replace('/[^0-9]+/', '', $phone);
    if ($replace[0] === '8') $replace[0] = '7';
    if ($replace[0] === '7') $replace = '+' . $replace;
    return 'tel:' . $replace;
}

function addHeadString(string $string)
{
    if (!isset($GLOBALS['additionalStringsHead'])) $GLOBALS['additionalStringsHead'] = [];
    $GLOBALS['additionalStringsHead'][] = $string;
}

function showHeadStrings()
{
    if (!isset($GLOBALS['additionalStringsHead']) || empty($GLOBALS['additionalStringsHead'])) return;
    foreach ($GLOBALS['additionalStringsHead'] as $string) {
        echo $string . PHP_EOL;
    }
}

function addChartJS()
{
    addHeadString('<script src="' . ASSETS_PATH . 'js/chart.js"></script>');
    addHeadString('<script src="' . ASSETS_PATH . 'js/chartjs-plugin-datalabels.js"></script>');
    addHeadString('<script src="' . ASSETS_PATH . 'js/chartjs-plugin-annotation.js"></script>');
}

function addLottieJS() {
    addHeadString('<script src="' . ASSETS_PATH . 'js/lottie.js"></script>');
}