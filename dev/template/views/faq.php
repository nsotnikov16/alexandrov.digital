<? if (isset($list) && !empty($list)): ?>
    <section class="section">
        <div class="container">
            <h2 class="section__title"><span class="color">Ответы</span> на частые вопросы</h2>
            <div class="faq">
                <? foreach ($list as $item): ?>
                    <div class="spoiler faq__item">
                        <div class="spoiler__top">
                            <p class="spoiler__name"><?= $item['question'] ?></p>
                            <button class="spoiler__btn"></button>
                        </div>
                        <div class="spoiler__bottom">
                            <div class="spoiler__content">
                                <?= $item['answer'] ?>
                            </div>
                        </div>
                    </div>
                <? endforeach ?>
            </div>
        </div>
    </section>
<? endif; ?>