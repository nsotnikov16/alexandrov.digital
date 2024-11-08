<?php
$breadcrumbs = ['/cleaning_context/' => 'Кейс Клининговая компания'];
$breadcrumbs_background = '#8959D1';
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
addChartJS();
addHeadString('<script src="/cleaning_context/script.js"></script>');
?>
<?php getHeader(); ?>
<?php view('hero/case', [
    'addClass' => 'hero_75',
    'backgroundColor' => '#8959D1',
    'title' => 'Увеличение заявок для клининговой компании с контекстной рекламы и снижение их стоимости на 34%',
    'list' => [
        [
            'number' => '114',
            'text' => 'Новых клиента привлечено'
        ],
        [
            'number' => '-34%',
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
                    <p>Клининговая компания “Чистый дом” занимается профессиональным клинингом квартир и офисов. Клиент обратился за аудитом действующей контекстной рекламы, его не устраивали</p>
                    <ul>
                        <li>Высокая стоимость лида (3500 рублей за лид).</li>
                        <li>Низкий уровень конверсии (1,5%).</li>
                    </ul>
                    <br>
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
                        <li>Снизить стоимость привлечения клиентов</li>
                        <li>Увеличить конверсию сайта</li>
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
                    <h3>Анализ текущей ситуации:</h3>
                    <ul>
                        <li>Провели аудит существующих рекламных кампаний в Яндекс Директ по 86 ключевым пунктам</li>
                        <li>Выявили проблемы в настройках и стратегиях рекламных кампаний.</li>
                    </ul>
                    <br>
                    <p>Уже на этапе аудирования рекламной кампании увидели ряд ключевых проблем. Не были тщательно проработаны минус-слова, в следствии чего большое кол-во показов и кликов было по нецелевым запросам.</p>
                    <h3>Оптимизация ключевых слов и объявлений:</h3>
                    <ul>
                        <li>Пересмотрели и обновили список ключевых слов.</li>
                        <li>Добавили негативные ключевые слова для исключения нерелевантного трафика.</li>
                        <li>Создали новые объявления с более привлекательными и релевантными заголовками и текстами.</li>
                    </ul>
                    <br>
                    <p> Мы заметно расширили ядро запросов, по которым начали показывать наши объявления. В предыдущей рекламной кампании отсутствовал целый ряд услуг, например “химчистка мягкой мебели”, “уборка после ремонта”, “уборка после потопа”. Все эти услуги - целевые для клиента, но ранее показы по ним отсутствовали, и потенциальные клиенты уходили к конкурентам.</p>
                    <p>В объявлениях указали наши преимущества: выезд в день обращения, скидка всем новым клиентам.</p>
                    <p>Дополнительно, под каждый отдельный кластер запросов мы создали отдельные посадочные страницы, с разными заголовками. Работа заняла не много времени, но практически сразу подняла конверсию сайта с 1,5% до 3,5%</p>
                    <h3>Улучшение таргетинга:</h3>
                    <ul>
                        <li>Провели сегментацию целевой аудитории.</li>
                        <li>Настроили таргетинг на более узкие группы потенциальных клиентов.</li>
                    </ul>
                    <br><br>
                    <div class="content__table-container">
                        <style>
                            .table-lead td {
                                min-width: initial !important;
                                width: 50%;
                            }
                        </style>
                        <table class="table-lead">
                            <thead>
                                <tr>
                                    <td>Возраст</td>
                                    <td>Стоимость лида (после)</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>от 18 до 24</td>
                                    <td class="bg-gray">4 228 ₽</td>
                                </tr>
                                <tr>
                                    <td>от 25 до 34</td>
                                    <td class="bg-gray">1 943 ₽</td>
                                </tr>
                                <tr>
                                    <td>от 35 до 44</td>
                                    <td class="bg-gray">1 738 ₽</td>
                                </tr>
                                <tr>
                                    <td>от 45 до 54</td>
                                    <td class="bg-gray">3 370 ₽</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>На основании уже собранной статистики по звонкам провели сегментацию аудиторий. Выявили аудитории с самой низкой ценой заявки, и сделали для них повышающие корректировки. Для неэффективных аудиторий, - снизили ставки, либо совсем убрали показы. Так, например, самой дорогой оказалась аудитория от 45 лет, поэтому для них мы оставили показы по остаточному принципу:</p>
                    <h3>Настройка ретаргетинга:</h3>
                    <ul>
                        <li>Настроили кампании ретаргетинга для возврата пользователей, которые ранее посещали сайт, но не совершили целевое действие.</li>
                    </ul>
                    <br>
                    <p>Таким пользователям предлагали дополнительную скидку на наши услуги и старались превратить их в наших постоянных клиентов.</p>
                    <h3>Оптимизация бюджета и ставок:</h3>
                    <ul>
                        <li>Провели тестирование различных стратегий назначения ставок.</li>
                        <li> Перераспределили бюджет на наиболее эффективные ключевые слова и объявления.</li>
                    </ul>
                    <br>
                    <p>После запуска рекламной кампании начали собирать статистику по ключевым словам и направлениям. Часть ключевых слов оказалась невыгодной для показа рекламы, поэтому мы их отключили и перераспределили бюджет на более эффективные ключевые слова. Вместо ручной стратегии, которая была настроена в рекламной кампании ранее, - мы поставили автоматическую стратегию с оптимизацией по ключевым действиям, в нашем случае с оптимизацией по звонку. Так система будет отдавать приоритет для показа объявлений тем пользователям, которые в большей степени заинтересованы совершить заказ.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-2">
        <div class="container content">
            <div class="content__row">
                <h2>Результат работы</h2>
                <div>
                    <p>За 3 месяца мы смогли привлечь 114 новых клиентов, а средняя стоимость звонка снизилась в 2 раза по сравнению с предыдущей рекламной кампанией.</p>
                    <canvas class="chart" id="chart1"></canvas>
                    <h3>Более наглядные данные можно посмотреть в сводной таблице:</h3>
                    <div class="content__table-container">
                        <style>
                            .table-result td {
                                min-width: initial !important;
                                width: 20%;
                            }
                        </style>
                        <table class="table-result">
                            <thead>
                                <tr>
                                    <td class="bg-gray">Результат</td>
                                    <td class="bg-gray">Показы</td>
                                    <td class="bg-gray">Клики</td>
                                    <td class="bg-gray" style="white-space: nowrap;">Стоимость звонка</td>
                                    <td class="bg-gray">Разница</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Было</td>
                                    <td>1 376</td>
                                    <td>268</td>
                                    <td>3 575 руб.</td>
                                    <td>1,5%</td>
                                </tr>
                                <tr>
                                    <td>Стало</td>
                                    <td>1 964</td>
                                    <td>387</td>
                                    <td>2 359 руб.</td>
                                    <td class="bg-green">3,5%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>Благодаря комплексному подходу к оптимизации контекстной рекламы для клининговой компании "Чистый дом" нам удалось значительно снизить стоимость лида и увеличить конверсию. Эти улучшения позволили клиенту эффективнее использовать рекламный бюджет и привлечь больше клиентов.</p>
                </div>
            </div>
        </div>
    </section>
</article>
<?php view('lead/case') ?>
<?php getFooter();
