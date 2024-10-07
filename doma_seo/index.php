<?php
$breadcrumbs = ['/easygoenglish_seo/' => 'Кейс Строительные дома'];
$breadcrumbs_background = '#5DBB61';
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
addHeadString('<script src="' . ASSETS_PATH . 'js/chart.js"></script>');
addHeadString('<script src="' . ASSETS_PATH . 'js/chartjs-plugin-datalabels.js"></script>');
addHeadString('<script src="/doma_seo/script.js"></script>');
?>
<?php getHeader(); ?>
<?php view('hero/case', [
    'addClass' => 'hero_75',
    'backgroundColor' => '#5DBB61',
    'title' => 'Увеличили поисковый трафик и сделали сайт лидером в тематике строительства каркасных домов',
    'list' => [
        [
            'number' => '270%',
            'text' => 'Прирост поискового трафика'
        ],
        [
            'number' => '178',
            'text' => 'Запросов вы в ТОП-10  в конкурентной тематике'
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
                    <p>Компания СеверКаркасДом — это строительная компания, специализирующаяся на строительстве каркасных домов в Сибири. Контекстная реклама уже была запущена, поэтому клиент искал дополнительные способы привлечения целевого трафика.</p>
                    <div class="content__project">
                        <div>
                            <span>Сайт</span>
                            <a class="color font-family-2 font-weight link" href="https://domain.test" target="_blank">https://domain.test</a>
                        </div>
                        <div>
                            <span>Услуга</span>
                            <a href="/seo/" class="color font-family-2 font-weight link">Seo-продвижение</a>
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
                        <li>Привлечение дополнительного трафика из поисковых систем</li>
                        <li>Увеличение конверсии сайта</li>
                        <li>Вывод сайта в ТОП-10 по ряду высокочастотных фраз</li>
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
                    <p>При продвижении сайтов, особенно в конкурентных нишах, таких как строительство домов, нужно особое внимание уделить сбору семантического ядра — тех запросов, по которым целесообразно и эффективно продвигать сайт. А самое главное разбить эти запросы на целевые кластеры, чтобы максимально полно ответить на запрос пользователя и давать релевантную информацию с точки зрения поисковых систем. Например, чтобы продвинуться по запросу «Каркасный дом 6 × 6» - необходимо создать отдельный раздел, с каталогом домов, именно такой площади. Это не только позволит занять высокие места по этим запросам, но повысит конверсию сайта, потому-что мы приводим пользователя сразу на нужную страницу.</p>
                    <p>У клиента уже был одностраничный сайт, с хорошим дизайном, и в целом качественно сделанный. Однако, одной страницы недостаточно, чтобы сегментировать трафик и продвигаться по разным кластерам запросов. Поэтому первым делом было решено собрать весь пул целевых запросов, разбить их по кластерам и расширить структуру сайта.</p>
                    <h3>Часть структуры, которую мы реализовали:</h3>
                    <a href="/doma_seo/screen.webp" class="d-block" data-fancybox>
                        <img src="/doma_seo/screen.webp" class="d-block mx-auto" alt="Скриншот">
                    </a>
                    <br>
                    <br>
                    <p>Таким образом мы смогли максимально охватить целевую аудиторию, расширили структуру сайта с 1 страницы, до более чем 200 страниц. После доработок все эти страницы мы оптимизировали: сделали всю внутреннюю оптимизацию, устранили технические ошибки, доработали структуру каталога и его внешний вид.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-2">
        <div class="container content">
            <div class="content__row">
                <h2>Результат работы</h2>
                <div>
                    <p>За 6 месяцев мы смогли увеличить трафик сайта в 2,7 раз, став таким образом лидером по видимости сайта в поисковых системах:</p>
                    <canvas class="chart" id="chart1"></canvas>
                    <p>Побочный эффект расширения структуры сайта, создания релевантных страниц под запросы пользователей - это увеличение конверсии сайта в целом, и с контекстной рекламы, которая всё это время не переставала работать. Так, не внося каких-то серьезных изменений в контекстную рекламу, за счёт проделанных работ по сайту - удалось снизить стоимость лида в 1,5 раза:</p>
                    <canvas class="chart" id="chart2"></canvas>
                </div>
            </div>
        </div>
    </section>
</article>
<?php view('lead/case') ?>
<?php getFooter();
