<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<?php view('hero/inner', [
    'title' => '<span class="color">Настройка и ведение контекстной рекламы</span><br> в Сургуте',
    'subtitle' => 'Зарабатывайте больше, с помощью грамотно настроенной рекламной кампании. Основываюсь на бизнес-показателях, анализирую эффективность рекламы в денежном эквиваленте.',
    'imgSrc' => ASSETS_PATH . 'images/hero/adv.svg',
    'imgAlt' => 'Настройка и ведение контекстной рекламы в Сургуте',
    'imgClass' => 'hero__img_adv',
    'addClass' => 'hero_adv'
]) ?>
<?php view('info', [
    'title' => '<span class="color">Особенности</span> моего подхода к ведению рекламных кампаний',
    'list' => [
        [
            'img' => ASSETS_PATH . 'images/info/adv/1.svg',
            'title' => 'Комплексный подход',
            'preview' => 'Контекстная реклама приводит клиентов на сайт, но конечная продажа происходит на сайте.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/2.svg',
            'title' => 'Профессиональная аналитика в режиме реального времени',
            'preview' => '
            <img src="/dev/assets/images/info/adv/analitics.webp" /><br><br>
            Ищу оптимальные рекламные связки для вашего продукта, анализирую аудитории рекламной кампании: отключаю неэффективные показы, масштабирую эффективные.
            ',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/3.svg',
            'title' => 'Оптимизация рекламного бюджета',
            'preview' => 'Ваш бюджет будет распределяться только на эффективные ключевые фразы и сегменты аудиторий.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/4.svg',
            'title' => 'Техническая экспертиза',
            'preview' => 'Обладаю навыками, которые позволяют настраивать и оптимизировать рекламные кампании на продвинутом уровне, используя скрипты и автоматизацию процессов.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/5.svg',
            'title' => 'Быстрая реакция на изменения',
            'preview' => 'Оперативно реагирую на изменения в поведении пользователей, конкурентов и изменениях в настройках рекламных систем, чтобы ваша реклама всегда оставалась актуальной и эффективной.',
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/6.svg',
            'title' => 'Персонализированные стратегии',
            'preview' => 'Разрабатываю индивидуальные стратегии для каждой рекламной кампании, учитывая специфику вашего бизнеса.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
    ]
]) ?>
<?php view('promo', [
    'title' => 'Во всех остальных случаях буду рад вам помочь ',
    'subtitle' => 'Оставляйте заявку, и мы вместе подумаем<br> над реализацией ваших целей.',
    'class' => 'promo_adv'
]) ?>
<?php view('services/advertising') ?>
<?php view('about', ['addAboutClass' => 'about_dark']) ?>
<?php view('cases') ?>
<?php view('reviews') ?>
<?php view('lead/main') ?>
<?php getFooter();
