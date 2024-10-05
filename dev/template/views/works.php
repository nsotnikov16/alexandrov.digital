<? if (isset($list) && !empty($list)): ?>
    <section class="section <?= $addSectionClass ?? '' ?>">
        <div class="container works">
            <h2 class="section__title works__title"><?= $title ?></h2>
            <ul class="works__list">
                <? foreach ($list as $item): ?>
                    <li class="work cursor-effect">
                        <p class="work__name"><?= $item['name'] ?></p>
                        <p class="work__description"><?= $item['description'] ?></p>
                        <img class="work__gif" src="<?= ASSETS_PATH?>images/colors-linear-cube.gif">
                    </li>
                <? endforeach ?>
                <li class="work work_question">
                        Поработаем<br>
                        над вашим<br>
                        проектом?
                </li>
            </ul>
        </div>
    </section>
<? endif; ?>