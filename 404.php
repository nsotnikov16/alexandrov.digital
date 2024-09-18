<?php
define('BG_2', true);
$SEO_TITLE = 'Страница не найдена';
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<section class="section hero hero_inner">
    <div class="container page404">
        <h1 class="hero__title text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0"><span class="color">Страница</span> не найдена</h1>
        <span class="hero__img" style="max-width: 400px" data-img-svg data-src="<?= ASSETS_PATH ?>images/404.svg"></span>
        <div class="page404__bottom">
            <p class="page404__text">Вас может заинтересовать:</p>
            <nav class="page404__nav">
                <a href="/seo/" class="page404__nav-link scale">SEO продвижение</a>
                <a href="/advertising/" class="page404__nav-link scale">Контекстная реклама </a>
                <a href="/development/" class="page404__nav-link scale">Разработка сайтов</a>
            </nav>
        </div>
    </div>
</section>
<?php getFooter();
