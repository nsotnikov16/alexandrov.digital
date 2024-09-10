<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<?php view('hero/inner', [
    'title' => '<span class="color">Разработка сайтов</span><br> в Сургуте',
    'subtitle' => 'Разработка сайтов с учётом требований поисковых систем. Подберём оптимальное решение под ваши задачи: лендинг для быстрого старта, или многостраничный сайт с интеграциями со сложными сторонними системами.',
    'imgSrc' => ASSETS_PATH . 'images/hero/dev.svg',
    'imgAlt' => 'Разработка сайтов в Сургуте',
    'imgClass' => 'hero__img_dev'
]) ?>
<?php getFooter();
