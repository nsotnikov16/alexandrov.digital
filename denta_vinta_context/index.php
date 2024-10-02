<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
addHeadString('<script src="' . ASSETS_PATH . 'js/chart.js"></script>');
addHeadString('<script src="/denta_vinta_context/script.js"></script>');
?>
<?php getHeader(); ?>
<?php view('hero/case', [
    'backgroundColor' => '#2DB7F6',
    'title' => 'Снизили стоимость привлечения лида на 30% для стоматологии',
    'list' => [
        [
            'number' => '132',
            'text' => 'Новых клиента привлечено'
        ],
        [
            'number' => '-30%',
            'text' => 'Снижение стоимости привлечения лида'
        ],
    ]
]); ?>
<article>
    <section class="section">
        <div class="container content">
            <div class="content__row">
                <h2>Информация<br>
                    о проекте
                </h2>
                <div>
                    <p>Компания ДентаВита — стоматологическая клиника в Санкт-Петербурге, которая поставила перед нами обеспечить заявками новый, открывающийся филиал. Контекстная реклама уже была запущена, однако клиента не устраивала стоимость привлечения лида и их качество.</p>
                    <div class="content__project">
                        <div>
                            <span>Сайт</span>
                            <a class="color font-family-2 font-weight link" href="https://domain.ru" target="_blank">https://domain.ru</a>
                        </div>
                        <div>
                            <span>Услуга</span>
                            <a href="/advertising/" class="color font-family-2 font-weight link">Контекстная — реклама</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-2">
        <div class="container content">
            <div class="content__row">
                <h2>Цели и задачи
                </h2>
                <div>
                    <ol>
                        <li>Увеличение кол-ва обращений в стоматологию</li>
                        <li>Снижение стоимости лида на 30%</li>
                        <li>Обеспечить новый филиал стабильным потоком клиентов</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container content">
            <div class="content__row">
                <h2>Решение</h2>
                <div>
                    <p>Большинство стоматологий хотят привлекать клиентов на высокомаржинальные услуги, которые для них более интересны. Как правило, это ортодонтия и имплантация. Такие же пожелания были и у нашего клиента. Первоначальный запрос был примерно таким: «Оставить только ортодонтию и имплантацию, остальное не нужно».</p>
                    <p>Тем не менее, ещё раз обсудив с клиентом основную задачу - «Обеспечить новый филиал стабильным потоком клиентов», мы предложили на первое время сосредоточиться именно на небольших услугах, например «лечение кариеса», «отбеливание зубов», «профессиональная чистка зубов» по нескольким причинам:</p>
                    <ol>
                        <li>Стоимость привлечения лида на данные услуги ниже, чем на высококонкурентные ортодонтию и имплантацию</li>
                        <li>Необходимо было сформировать для нового филиала пул постоянных клиентов, которые будут обращаться в стоматологию с определённой периодичностью. Для этих целей отлично подходят такие услуги как «Профессиональная чистка зубов», которую нужно делать каждые пол года. К тому же, такие услуги часто выявляют потребность у клиентов лечения кариеса или др. услуг. А значит, единоразово привлекая клиента через рекламу, мы делаем его постоянным клиентом, и уже последующие его визиты для нас обходятся бесплатно.</li>
                    </ol>
                    <p>В целом наше предложение было принято, и мы начали работу.</p>
                    <h3>После разработки сайта — начали активную фазу продвижения:</h3>
                    <ul>
                        <li>Брендовые запросы</li>
                        <li>Целевая фраза + Гео (район, метро, улица, ближайшие объекты)</li>
                        <li>Конкуренты (в первую очередь тех, кто находится рядом с клиникой, и в той же ценовой категории)</li>
                        <li>Запросы по конкретным целевым услугам.</li>
                    </ul>
                    <br>
                    <p>Дополнительно подключили гиперлокальный таргетинг (территория вокруг стоматологии в определённом радиусе), чтобы реклама показывалась только людям, которые живут недалеко от нашей стоматологии. Этот инструмент у Яндекса работает плохо, но лучше использовать все возможности рекламы, тем более что в данном случае никто ничего не теряет.</p>
                    <p>Узнали, какие «популярные» стоматологи работают рядом с нашей клиникой, которых ищут наши потенциальные клиенты, и запустили отдельные объявления на эти запросы.</p>
                    <p>Проработали минус-слова, чтобы исключить нецелевые показы, например «дёшево, ОМС, бесплатно» и т.д.</p>
                    <p>Подключили систему отслеживания звонков и настроили аналитику, чтобы считать стоимость привлечения клиента.</p>
                    <p>В процессе накопления статистики корректировали ставки для разных сегментов аудиторий. Так, например, женщины лучше конвертировались на ортодонтию, поэтому для них увеличили ставку, чтобы привлекать их более активно. Отследили самое «активное» время, на которое приходится больше всего звонков, и на это время добавили приоритет.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-2">
        <div class="container content">
            <div class="content__row">
                <h2>Результат работы</h2>
                <div>
                    <p>За 3 месяца мы смогли привлечь 132 клиента, а средняя стоимость звонка снизилась на 30% по сравнению с предыдущей рекламной кампанией.</p>
                    <canvas class="chart" id="chart1"></canvas>
                    <h3>Также мы вели аналитику по каждому из направлений, и вносили корректировки по каждому из них отдельно:</h3>
                    <div class="content__table-container">
                        <table>
                            <thead>
                                <tr>
                                    <td class="bg-gray">Направление</td>
                                    <td class="bg-gray" style="max-width: 100px">Стоимость лида (до)</td>
                                    <td class="bg-gray" style="max-width: 110px">Стоимость лида (после)</td>
                                    <td class="bg-gray" style="max-width: 100px">Разница</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Основная стоматология</td>
                                    <td class="bg-gray">3 258 ₽</td>
                                    <td class="bg-gray">2 281 ₽</td>
                                    <td class="bg-green">30%</td>
                                </tr>
                                <tr>
                                    <td>Протезирование</td>
                                    <td class="bg-gray">7 806 ₽</td>
                                    <td class="bg-gray">5 074 ₽</td>
                                    <td class="bg-green">35%</td>
                                </tr>
                                <tr>
                                    <td>Пародонтология</td>
                                    <td class="bg-gray">4 712 ₽</td>
                                    <td class="bg-gray">4 005 ₽</td>
                                    <td class="bg-green">15%</td>
                                </tr>
                                <tr>
                                    <td>Хирургия</td>
                                    <td class="bg-gray">3 370 ₽</td>
                                    <td class="bg-gray">3 033 ₽</td>
                                    <td class="bg-green">10%</td>
                                </tr>
                                <tr>
                                    <td>Имплантация</td>
                                    <td class="bg-gray">8 832 ₽</td>
                                    <td class="bg-gray">4 416 ₽</td>
                                    <td class="bg-green">50%</td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Терапия</td>
                                    <td class="bg-gray">3 757 ₽</td>
                                    <td class="bg-gray">2 630 ₽</td>
                                    <td class="bg-green">30%</td>
                                </tr>
                                    <td>Брекеты</td>
                                    <td class="bg-gray">6 696 ₽</td>
                                    <td class="bg-gray">4 687 ₽</td>
                                    <td class="bg-green">30%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<?php view('lead/case') ?>
<?php getFooter();
