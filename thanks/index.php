<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<section class="section ">
    <div class="container">
        <div class="thanks">
            <div class="thanks__left">
                <h1 class="page-title"><span class="color">Спасибо</span><br>за вашу заявку!</h1>
                <div class="content">
                    <p>Мы свяжемся с Вами в ближайшее время.</p>
                    <p>А если у Вас "горит" и ждать нельзя, скорее звоните нам:</p>
                    <a href="<?= getHrefForPhone(PHONE) ?>" class="phone thanks__phone"><?= PHONE ?></a>
                </div>
            </div>
            <div class="thanks__right">
                <img class="thanks__photo" src="<?= ASSETS_PATH ?>images/photo.webp" alt="Дмитрий Александров">
            </div>
        </div>
    </div>
</section>
<?php getFooter(); ?>