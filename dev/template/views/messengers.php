<div class="messengers <?= $vars['addClass'] ?? '' ?>">
    <? if (defined('WHATSAPP') && WHATSAPP): ?>

        <a href="<?= WHATSAPP ?>" class="messengers__item messengers__item_whatsapp">
            <svg>
                <use href="<?= ASSETS_PATH ?>images/icons/sprite.svg#whatsapp"></use>
            </svg>
        </a>

    <? endif; ?>

    <? if (defined('TELEGRAM') && TELEGRAM): ?>

        <a href="<?= TELEGRAM ?>" class="messengers__item messengers__item_telegram">
            <svg>
                <use href="<?= ASSETS_PATH ?>images/icons/sprite.svg#telegram"></use>
            </svg>
        </a>

    <? endif; ?>

    <? if (defined('VIBER') && VIBER): ?>

        <a href="<?= VIBER ?>" class="messengers__item messengers__item_viber">
            <svg>
                <use href="<?= ASSETS_PATH ?>images/icons/sprite.svg#viber"></use>
            </svg>
        </a>

    <? endif; ?>
</div>