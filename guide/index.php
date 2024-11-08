<?php
http_response_code(404);
if (!isset($_GET['DmitryAlexandov']) || $_GET['DmitryAlexandov'] != 1) die; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<section class="section">
    <div class="container">
        <h1 class="page-title color text-center">Руководство</h1>
        <div class="content">
            <p class="text-center"><b>На данную страницу поставил статус 404</b></p>
            <h2>Рабочие директории</h2><br>
            <p><code>/dev/</code> - общая рабочая папка для шаблонов, программирования и файлов</p>
            <p><code>/dev/api/</code> - бэкенд отправки форм с сайта</p>
            <p><code>/dev/assets/</code> - фронтенд содержимое - JS, CSS, изображения, иконки, lottie файлы, шрифты, видео</p>
            <p><code>/dev/template/</code> - файлы шаблона: header, footer..., где можно вставить прочие сторонние скрипты. Также здесь лежат представления (вьюшки) в папке views. Это аналог компонентов в битриксе.</p>
            <p><code>/dev/tools/</code> - инструменты для разработки, здесь же и находится ядро</p>
            <br>
            <hr>
            <br>
            <h2>SEO</h2>
            <br>
            <p>Мета-теги "title" и "description" по умолчанию лежат здесь - <code>/dev/tools/seo.php</code>:</p>
            <p>
                <code>const SEO_TITLE_DEFAULT = 'Alexandrov.Digital';<br>
                    const SEO_DESCRIPTION_DEFAULT = 'Alexandrov.Digital';</code>
            </p>
            <p>Чтобы переопределить на нужной странице мета-теги, необходимо вначале индексного файла объявить переменные, пример:</p>
            <p>
                <code>
                    $SEO_TITLE = 'Заголовок главной страницы';<br>
                    $SEO_DESCRIPTION = 'Описание главной страницы';<br>
                    require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
                </code>
            </p>
            <p>Так же на будущее там уже заложена мультирегиональность, но ее нужно будет немного доработать</p>
            <br>
            <hr>
            <br>
            <h2>Представления (вьюшки), то есть компоненты</h2>
            <br>
            <p>На страницах ты увидишь примерно такой код:</p>
            <p><code>view('hero/index'); <br>view('presentation');</code></p>
            <p>где название вьюшки это путь к файлу от директории <code>/dev/template/views</code></p>
            <p>то есть для <code>view('hero/index')</code>, путь к файлу находится здесь <code>/dev/template/views/<b>hero/index</b>.php</code></p>
            <p>или для <code>view('presentation')</code>, путь к файлу находится здесь <code>/dev/template/views/<b>presentation</b>.php</code></p>
            <p>Вьюшки обязательно должны быть PHP файлом, то есть с окончанием .php</p>
            <p>Есть вьюшки, куда помимо названия передаются еще и массив каких-то параметров (данных) для динамического отображения:</p>
            <p>
                <code>view('price', ['list' => [<br>
                    ['name' => 'Разработка сайта на Tilda', 'price' => 'от 40 000 ₽'],<br>
                    ['name' => 'Разработка дизайна сайта', 'price' => 'от 40 000 ₽'],<br>
                    ['name' => 'Разработка сайта на 1С-Битрикс', 'price' => 'от 40 000 ₽'],<br>
                    ['name' => 'Проектирование структуры сайта', 'price' => 'от 15 000 ₽'],<br>
                    ['name' => 'Доработка сайтов', 'price' => 'от 3 000 ₽'],<br>
                    ['name' => 'Корректировка готовых сайтов', 'price' => 'от 4 000 ₽'],<br>
                    ]])
                </code>
            </p>
            <p>На примере выше мы вызываем "компонент" блока цен, например, передаем список "list" в виде массива услуг с ценами, где у каждой услуги есть название "name" и стоимость "price"</p>
            <p>В целом все нужные переменные можно посмотреть в самом представлении (как определить путь к файлу описал выше). Тут бы немного базовых знаний программирования не помешало для понимания. Но если будут вопросы - задавай</p>
            <br>
            <hr>
            <br>
            <h2>Константы для использования и прочего</h2>
            <br>
            <p><code>/dev/tools/contstants.php</code></p>
            <p><code>TEMPLATE_PATH</code> - путь к шаблону</p>
            <p><code>ASSETS_PATH</code> - путь к фронтенд файлам (картинкам, видео, шрифтов...) относительно корня сайта</p>
            <p><code>FULL_ASSETS_PATH</code> - полный путь на сервере к фронтенд файлам (картинкам, видео, шрифтов...)</p>
            <p><code>VIEWS_PATH</code> - путь к представлениям views</p>
            <p><code>TELEGRAM_TOKEN</code> - токен телеграм бота, с которого будут приходить заявки</p>
            <p><code>TELEGRAM_CHATID</code> - ID чата в телеграме, куда будут приходить заявки</p>
            <p><code>CURRENT_URL</code> - текущий домен сайта</p>
            <p><code>PHONE</code> - номер телефона</p>
            <p><code>EMAIL</code> - почта</p>
            <p><code>TELEGRAM</code> - ссылка на телеграм</p>
            <p><code>WHATSAPP</code> - ссылка на whatsapp</p>
            <p><code>VIBER</code> - ссылка на viber</p>
            <h3>Как выводить константы:</h3>
            <p>Пример кода вывода номера телефона можно посмотреть здесь: <code>/dev/template/header.php</code></p>
            <p>Обрати внимание на функцию <code><b>getHrefForPhone(PHONE)</b></code>, которая сразу формирует нужную ссылку для номера в формате <b>tel:+78005553535</b></p>
            <br>
            <hr>
            <br>
            <h2>Графики</h2>
            <br>
            <p>На страницах кейсов есть графики, созданные через JavaScript, они лежат в той же директории где и индексный файл</p>
            <p>Думаю, если нужно поменять значения и прочие данные, там разобраться можно, но навыки программирования будут плюсом</p>
            <br>
            <hr>
            <br>
            <h2>Хлебные крошки</h2>
            <br>
            <p>По аналогии с SEO, в начале страницы перед вызовом ядра объявить переменную хлебных крошек:</p>
            <p>
                <code>$breadcrumbs = ['/denta_vinta_context/' => 'Кейс стоматология'];
                </code> - сюда передается цепочка урлов со 2 страницы пути, то есть Главная уже будет указана автоматически. <br>
                <code>$breadcrumbs_background = '#2DB7F6';</code> - изменит цвет фона хлебных крошек (используется в кейсах)<br>
                <code>
                    $SEO_TITLE = 'Заголовок кейса';<br>
                    $SEO_DESCRIPTION = 'Описание кейса';<br>
                    require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; // код подключения ядра
                </code>
            </p>
        </div>
    </div>
</section>
<?php getFooter();
