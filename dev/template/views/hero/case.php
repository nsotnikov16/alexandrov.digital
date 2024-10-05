<? if (isset($backgroundColor) && $backgroundColor): ?>
    <style>
        .hero_case {
            background-color: <?= $backgroundColor ?>;
        }
    </style>
<? endif; ?>

<section class="section hero hero_case <?= $addClass ?? '' ?>">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__text-block">
                <h1 class="hero__title"><?= $title ?></h1>
            </div>
            <? if (isset($list) && !empty($list)): ?>
                <ul class="hero__list">
                    <? foreach ($list as $item): ?>
                        <li class="hero__item">
                            <? if (isset($item['number']) && $item['number']): ?>
                                <p class="hero__item-number color counter" data-target="<?= $item['number'] ?>">0</p>
                            <? endif; ?>
                            <? if (isset($item['text']) && $item['text']): ?>
                                <p class="hero__item-text"><?= $item['text'] ?></p>
                            <? endif; ?>
                        </li>
                    <? endforeach ?>
                </ul>
            <? endif; ?>
        </div>
    </div>
</section>