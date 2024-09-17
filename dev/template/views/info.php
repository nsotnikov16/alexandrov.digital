<? if (isset($list) && !empty($list)): ?>
    <section class="section <?= $addSectionClass ?? '' ?>">
        <div class="container">
            <div class="info">
                <? if (isset($title) && $title) : ?>
                    <div class="info__left">
                        <h2 class="section__title info__title"><?= $title ?></h2>
                    </div>
                <? endif; ?>
                <div class="info__right">
                    <ul class="info__list">
                        <? foreach ($list as $item): ?>
                            <li class="info__item">
                                <? if (isset($item['img']) && $item['img']): ?>
                                    <img class="info__item-img" src="<?= $item['img'] ?>" />
                                <? endif; ?>
                                <div class="info__item-text">
                                    <h4 class="info__item-text-title"><?= $item['title'] ?></h4>
                                    <div class="info__item-text-preview"><?= $item['preview'] ?></div>
                                    <? if (isset($item['detail']) && $item['detail']): ?>
                                        <div class="info__item-text-detail">
                                            <?= $item['detail'] ?>
                                        </div>
                                        <div class="info__item-text-full color scale" data-info-full>Подробнее</div>
                                    <? endif; ?>
                                </div>
                            </li>
                        <? endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<? endif; ?>