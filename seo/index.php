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
<?php getFooter();
