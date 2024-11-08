<li class="service">
    <a href="<?= $url ?? 'javascript:void(0)' ?>" class="service__wrapper">
        <div class="service__top">
            <? if (isset($img) && !empty($img)): ?>
                <img class="service__img" src="<?= $img['src'] ?>" alt="<?= $img['alt'] ?>" />
            <? endif; ?>
            <p class="service__name"><?= $name ?></p>
            <? if (isset($description) && $description): ?>
                <p class="service__description"><?= $description ?></p>
            <? endif; ?>
        </div>
        <div class="service__bottom">
            <? if (isset($price) && $price): ?>
                <p class="service__price"><?= $price ?></p>
            <? endif; ?>
            <? if (isset($deadline) && $deadline): ?>
                <p class="service__deadline"><?= $deadline ?></p>
            <? endif; ?>
            <? if (isset($button) && !empty($button)): ?>
                <button <?= isset($button['url']) ? ('onclick="location = ' . $button['url'] . '"') : 'onclick="document.querySelector(`#lead-main`).scrollIntoView()"' ?> class="service__button btn" <?= $button['attributes'] ?? '' ?>><?= $button['text'] ?></button>
            <? endif ?>
        </div>
    </a>
</li>