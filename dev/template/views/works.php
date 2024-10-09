<? if (isset($list) && !empty($list)): ?>
    <section class="section <?= $addSectionClass ?? '' ?>">
        <div class="container works">
            <h2 class="section__title works__title"><?= $title ?></h2>
            <ul class="works__list">
                <? foreach ($list as $item): ?>
                    <li class="work cursor-effect" data-lottie-parent>
                        <p class="work__name"><?= $item['name'] ?></p>
                        <p class="work__description"><?= $item['description'] ?></p>
                        <? if (isset($item['lottie'])): ?>
                            <div class="lottie work__lottie" data-lottie="<?= $item['lottie'] ?>" style="<?= $item['lottie-style'] ?? '' ?>"></div>
                        <? endif; ?>
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