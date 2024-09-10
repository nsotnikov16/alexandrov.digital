<section class="section hero hero_inner <?= $addClass ?? '' ?>">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__text-block">
                <h1 class="hero__title"><?= $title ?></h1>
                <? if (isset($subtitle)): ?>
                    <p class="hero__subtitle"><?= $subtitle ?></p>
                <? endif; ?>
            </div>

            <? if (isset($imgSrc)): ?>
                <img class="hero__img <?= $imgClass ?? '' ?>" src="<?= $imgSrc ?>" alt="<?= $imgAlt ?>">
            <? endif; ?>
        </div>
    </div>
</section>