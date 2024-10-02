<?
define('CORE_ON', true);
define('TEMPLATE_PATH', '/dev/template/');
define('ASSETS_PATH', '/dev/assets/');
define('FULL_ASSETS_PATH', $_SERVER['DOCUMENT_ROOT'] . ASSETS_PATH);
define('VIEWS_PATH', TEMPLATE_PATH . 'views/');
define('TELEGRAM_TOKEN', '8142031803:AAGdjX7tyS_l6UMN-l9jzkHHZW9vEnrEUlE'); // Токен телеграм бота
define('TELEGRAM_CHATID', '384435719'); // ID чата, куда бот будет слать сообщения
define('CURRENT_URL', (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);
define('PHONE', '+7 982 560-28-32');
define('EMAIL', 'example@example.com');
define('TELEGRAM', 'https://t.me/<username>');
define('WHATSAPP', 'https://wa.clck.bar/<phone>'); // Номер телефона, начиная с 7
define('VIBER', 'https://vibr.cc/<phone>'); // Номер телефона, начиная с 7