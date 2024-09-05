<ul class="messengers <?= $addClass ?? '' ?>">
    <? if (defined('WHATSAPP') && WHATSAPP): ?>
        <li class="messengers__item messengers__item_whatsapp">
            <a href="<?= WHATSAPP ?>" class="messengers__link">
                <svg>
                    <use href=""></use>
                </svg>
            </a>
        </li>
    <? endif; ?>

    <? if (defined('TELEGRAM') && TELEGRAM): ?>
        <li class="messengers__item messengers__item_telegram">
            <a href="<?= TELEGRAM ?>" class="messengers__link">
                <svg>
                    <use href=""></use>
                </svg>
            </a>
        </li>
    <? endif; ?>

    <? if (defined('VIBER') && VIBER): ?>
        <li class="messengers__item messengers__item_viber">
            <a href="<?= VIBER ?>" class="messengers__link">
                <svg>
                    <use href=""></use>
                </svg>
            </a>
        </li>
    <? endif; ?>
</ul>