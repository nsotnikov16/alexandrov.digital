<div class="messengers <?= $vars['addClass'] ?? '' ?>">
    <? if (defined('WHATSAPP') && WHATSAPP): ?>

        <a href="<?= WHATSAPP ?>" class="messengers__item messengers__item_whatsapp">
            <span data-img-svg data-src="<?= ASSETS_PATH ?>images/icons/messengers/whatsapp.svg">
        </a>

    <? endif; ?>

    <? if (defined('TELEGRAM') && TELEGRAM): ?>

        <a href="<?= TELEGRAM ?>" class="messengers__item messengers__item_telegram">
            <span data-img-svg data-src="<?= ASSETS_PATH ?>images/icons/messengers/telegram.svg">
        </a>

    <? endif; ?>

    <? if (defined('VIBER') && VIBER): ?>

        <a href="<?= VIBER ?>" class="messengers__item messengers__item_viber">
            <span data-img-svg data-src="<?= ASSETS_PATH ?>images/icons/messengers/viber.svg">
        </a>

    <? endif; ?>
</div>