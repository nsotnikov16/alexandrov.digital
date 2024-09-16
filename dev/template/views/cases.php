<?
$cases = [
    [
        'name' => 'Школа изучения английского языка',
        'description' => 'Оцифровали бизнес, настроили CRM, вывели сайт
            в ТОП-5 по ключевым запросам и увеличили трафик<br> 
            c 0 до 226 уникальных посетителей',
        'img' => [
            'src' => ASSETS_PATH . 'images/cases/1.webp',
            'alt' => 'Школа изучения английского языка',
        ],
        'class' => 'case_1',
        'url' => ''
    ],
    [
        'name' => 'Рекламное агентство',
        'description' => 'Вывели 91% продвигаемых запросов 
            в ТОП-5 в 3 трёх регионах. Увеличили
            трафик в 2 раза',
        'img' => [
            'src' => ASSETS_PATH . 'images/cases/2.webp',
            'alt' => 'Рекламное агентство',
        ],
        'class' => 'case_2',
        'url' => ''
    ],
    [
        'name' => 'Строительство каркасных домов',
        'description' => 'Рост трафика <br>
            с 0 до 300 человек',
        'img' => [
            'src' => ASSETS_PATH . 'images/cases/3.webp',
            'alt' => 'Строительство каркасных домов',
        ],
        'class' => 'case_3',
        'url' => ''
    ],
    [
        'name' => 'Стоматология «ДентаВита»',
        'description' => 'Снизили стоимость привлечения клиента на 30% с контекстной рекламы',
        'img' => [
            'src' => ASSETS_PATH . 'images/cases/4.webp',
            'alt' => 'Стоматология «ДентаВита»',
        ],
        'class' => 'case_4',
        'url' => ''
    ],
    [
        'name' => 'Клининговая компания',
        'description' => 'Снижение стоимости лида на 34% 
            и увеличение конверсии с 1,5% 
            до 3,5%',
        'img' => [
            'src' => ASSETS_PATH . 'images/cases/5.webp',
            'alt' => 'Клининговая компания',
        ],
        'class' => 'case_5',
        'url' => ''
    ],
    [
        'name' => 'Спа салон для мужчин',
        'description' => 'Настроили мини-CRM ведения отчётности в Excel. 
            Увеличили трафик на сайт и снизили стоимость
            заявки в 3 раза',
        'img' => [
            'src' => ASSETS_PATH . 'images/cases/6.webp',
            'alt' => 'Спа салон для мужчин',
        ],
        'class' => 'case_6',
        'url' => ''
    ],
]
?>
<? if (!empty($cases)): ?>
    <section class="section <?= $addSectionClass ?? ''?>">
        <div class="container">
            <h2 class="section__title">Наши кейсы</h2>
            <ul class="cases">
                <? foreach ($cases as $case): ?>
                    <li class="case <?= $case['class'] ?>">
                        <a href="<?= $case['url'] ?>" class="case__wrapper">
                            <p class="case__name"><?= $case['name'] ?></p>
                            <img src="<?= $case['img']['src'] ?>" alt="<?= $case['img']['alt'] ?>" class="case__img" />
                            <p class="case__description"><?= $case['description'] ?></p>
                        </a>
                    </li>
                <? endforeach ?>

                <li class="case case_consultation bg-2">
                    <div class="case__wrapper">
                        <div class="case__top">
                            <p class="case__name">Обсудите задачу с экспертом</p>
                            <div class="case__description">Обсудим ваши задачи, предложим варианты решения</div>
                        </div>
                        <div class="case__bottom">
                            <button class="btn btn_color">Получить консультацию</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
<? endif; ?>