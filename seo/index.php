<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<?php view('hero/inner', [
    'title' => '<span class="color">SEO-продвижение</span> сайтов для бизнеса<br> в Сургуте',
    'subtitle' => 'Проведу аудит сайта, оценю его перспективы роста в органической выдаче. Учту все нюансы продвижения сайта именно в Сургуте.',
    'imgSrc' => ASSETS_PATH . 'images/hero/seo.svg',
    'imgAlt' => 'SEO-продвижение сайтов для бизнеса в Сургуте',
    'imgClass' => 'hero__img_seo'
]) ?>
<?php view('info', [
    'title' => '<span class="color">Почему</span> я беру<br>на продвижение <br><span class="color">не все сайты</span><br> в Сургуте?',
    'list' => [
        [
            'img' => ASSETS_PATH . 'images/info/seo/1.svg',
            'title' => 'Низкий спрос',
            'preview' => 'SEO-продвижение - это привлечение на сайт клиентов по уже готовому, сформированному спросу.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/seo/2.svg',
            'title' => 'Плохое качество сайта',
            'preview' => 'Поисковые системы “ставят в ТОП” сайты хорошего качества, которые удобны для пользователя',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/seo/3.svg',
            'title' => 'Особенность поисковой выдачи в вашей тематике',
            'preview' => 'Если ваша тематика сверхконкурентная, а поисковая выдача занята большими федеральными компаниями или агрегаторами, то попасть в ТОП-10 будет сложно.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
    ]
]) ?>
<?php view('promo', [
    'title' => 'Во всех остальных случаях буду рад вам помочь ',
    'subtitle' => 'Оставляйте заявку, и мы вместе подумаем<br>  над реализацией ваших целей.',
    'class' => 'promo_seo'
]) ?>
<?php view('services/seo') ?>
<?php view('about', ['addAboutClass' => 'about_dark']) ?>
<?php view('cases') ?>
<?php view('reviews') ?>
<?php view('lead/main') ?>
<?php getFooter();
