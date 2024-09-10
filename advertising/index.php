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
<?php getFooter();
