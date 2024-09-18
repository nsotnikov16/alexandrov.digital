<? if (isset($list) && !empty($list)): ?>
    <section class="section section_dark">
        <div class="container">
            <div class="price">
                <h2 class="section__title price__title">Прайс-лист<br> на услуги</h2>
                <ul class="price__list">
                    <? foreach ($list as $item): ?>
                        <li class="price__item">
                            <p><?= $item['name'] ?></p>
                            <p><?= $item['price'] ?></p>
                        </li>
                    <? endforeach ?>
                </ul>
            </div>
        </div>
    </section>
<? endif; ?>