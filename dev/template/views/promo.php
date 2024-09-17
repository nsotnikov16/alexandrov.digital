<section class="section bg-2">
    <div class="container">
        <div class="promo <?= $class ?? '' ?>">
            <h2 class="section__title promo__title"><?= $title ?></h2>
            <p class="promo__subtitle"><?= $subtitle ?></p>
            <a href="#" class="btn btn_color promo__button">Оставить заявку</a>
            <img src="<?= ASSETS_PATH ?>images/promo.svg" class="promo__img" />
        </div>
    </div>
</section>