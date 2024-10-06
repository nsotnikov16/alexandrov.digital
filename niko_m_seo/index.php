<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
addHeadString('<script src="' . ASSETS_PATH . 'js/chart.js"></script>');
addHeadString('<script src="' . ASSETS_PATH . 'js/chartjs-plugin-datalabels.js"></script>');
addHeadString('<script src="/niko_m_seo/script.js"></script>');
?>
<?php getHeader(); ?>
<?php view('hero/case', [
    'backgroundColor' => '#405DFF',
    'title' => 'Увеличили поисковый трафик в 4 раза и вышли на 3 новых региона',
    'list' => [
        [
            'number' => '1017',
            'text' => 'Продвигаемых запросов вошли в ТОП-5 выдачи поисковых систем'
        ],
        [
            'number' => '178',
            'text' => 'Рост трафика с 250 до 1017 уникальных посетителей в месяц'
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
                    <p>Компания Niko Media — это рекламное агентство, размещающая рекламу на придорожных щитах, радио и ТВ. На момент обращения к нам компания оказывала услуги только в Сургуте, и ставила амбициозные задачи по расширению своих услуг на 3 новых региона: Тюменская область, Краснодарский край, Крым.</p>
                    <div class="content__project">
                        <div>
                            <span>Сайт</span>
                            <a class="color font-family-2 font-weight link" href="https://niko-m.ru" target="_blank">https://niko-m.ru</a>
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
                        <li>Увеличение видимости сайта в поисковых системах в Сургуте</li>
                        <li>Помощь в доработке сайта под продвижение на 3 новых региона</li>
                        <li>Продвижение сайта в новых регионах, в которых клиент ранее не оказывал услуги</li>
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
                    <p>Первоначальная задача состояла в том, чтобы улучшить позиции сайта и видимость в Сургуте, - городе, в котором клиент представлен давно. Для этого провели технический аудит сайта, нашли и исправили все ошибки: убрали дубли страниц, нашли и удалили ссылки на 404 страницы, настроили 301 редиректы с зеркал сайта и др. технические работы.</p>
                    <p>Параллельно с этим запустили работы по внутренней оптимизации сайта: подогнали текстовую релевантность под продвигаемые запросы, уникализировали большое кол-во однотипных страниц, прописали заголовки и описания для каждой страницы сайта. Чтобы быть лучше конкурентов, и предоставлять пользователю максимум полезной информации на сайте — доработали каталог наружной рекламы. Теперь на сайте стали отображаться все конструкции рекламных щитов, доступных к аренде, с фотографиями, рейтингом места, ценой и др. полезной информацией.</p>
                    <p>Разработали калькулятор для размещения рекламы на ТВ и Радио, чтобы пользователь мог самостоятельно, по своим параметрам узнать цену размещения рекламы.
                    </p>
                    <p>Все эти доработки улучшили поведенческие факторы пользователей на сайте и конверсию.</p>
                    <h3>Уже эти работы дали значительный рост видимости и трафика в Сургуте:</h3>
                    <canvas class="chart" id="chart1"></canvas>
                    <h3>И рост позиций:</h3>
                    <div class="content__table-container">
                        <table>
                            <thead>
                                <tr>
                                    <td>Запросы</td>
                                    <td>29.11.2021</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>аренда щитов</td>
                                    <td class="bg-green">4</td>
                                </tr>
                                <tr>
                                    <td>аренда щитов 3 × 6</td>
                                    <td class="bg-green">2</td>
                                </tr>
                                <tr>
                                    <td>аренда щитов 3хб сочи</td>
                                    <td class="bg-green">2</td>
                                </tr>
                                <tr>
                                    <td>придорожные щиты сочи</td>
                                    <td class="bg-green">1</td>
                                </tr>
                                <tr>
                                    <td>бегущая строка сочи</td>
                                    <td class="bg-green">8</td>
                                </tr>
                                <tr>
                                    <td>рекламные щиты сочи</td>
                                    <td class="bg-green">10</td>
                                </tr>
                                <tr>
                                    <td>реклама на тв в сочи</td>
                                    <td class="bg-green">2</td>
                                </tr>
                                <tr>
                                    <td>реклама на тв</td>
                                    <td class="bg-green">3</td>
                                </tr>
                                <tr>
                                    <td>реклама на тв сочи</td>
                                    <td class="bg-green">2</td>
                                </tr>
                                <tr>
                                    <td>реклама на тв сочи</td>
                                    <td class="bg-green">2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>Но нам ещё предстояла работа по выводу сайта в ТОП по трём новым регионам. Для этого мы доработали функционал выбора города на сайте, уникализировали условия размещения и каталог рекламных мест в каждом городе, для каждого города, а это 72 города и около 500 страниц под каждое предложение — прописали уникальный текст и мета-теги. Начали активно увеличивать ссылочную массу сайта: писали статьи на других сайтах со ссылкой на наш продвигаемый сайт, регистрировали сайт в крупных каталогах в продвигаемых регионах.</p>
                    <p>Через 6 месяцев активных работ мы смогли занять высокие позиции в новых городах и даже обогнать местных конкурентов, которые там продвигались много лет.</p>
                    <h3>Пример позиций по городу Сочи:</h3>
                    <div class="content__table-container">
                        <table>
                            <thead>
                                <tr>
                                    <td>Запросы</td>
                                    <td>03.02.2023</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>аренда щитов</td>
                                    <td class="bg-green">4</td>
                                </tr>
                                <tr>
                                    <td>аренда щитов 3 × 6</td>
                                    <td class="bg-green">2</td>
                                </tr>
                                <tr>
                                    <td>аренда щитов 3хб сочи</td>
                                    <td class="bg-green">2</td>
                                </tr>
                                <tr>
                                    <td>придорожные щиты сочи</td>
                                    <td class="bg-green">1</td>
                                </tr>
                                <tr>
                                    <td>бегущая строка сочи</td>
                                    <td class="bg-green">8</td>
                                </tr>
                                <tr>
                                    <td>рекламные щиты сочи</td>
                                    <td class="bg-green">10</td>
                                </tr>
                                <tr>
                                    <td>реклама на тв в сочи</td>
                                    <td class="bg-green">2</td>
                                </tr>
                                <tr>
                                    <td>реклама на тв</td>
                                    <td class="bg-green">3</td>
                                </tr>
                                <tr>
                                    <td>реклама на тв сочи</td>
                                    <td class="bg-green">2</td>
                                </tr>
                                <tr>
                                    <td>реклама на тв сочи</td>
                                    <td class="bg-green">2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>В дополнении к проделанной работе, мы начали работать над тем, чтобы занять «нулевые» позиции в поисковой выдаче, в расширенные сниппеты. Так это выглядит в ответ на определённые запросы:</p>
                    <a href="/niko_m_seo/screen.webp" data-fancybox>
                        <img src="/niko_m_seo/screen.webp" alt="Скриншот Google">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-2">
        <div class="container content">
            <div class="content__row">
                <h2>Результат работы</h2>
                <div>
                    <p>За 1,5 года работ мы доработали функционал сайта, улучшили поведенческие метрики сайта, заняли высокие позиции сначала в городе Сургут, далее вышли на три новых региона, и 72 города, и заняли высокие позиции в них.</p>
                    <h3>Рост трафика увеличился в 4 раза:</h3>
                    <canvas class="chart" id="chart2"></canvas>
                </div>
            </div>
        </div>
    </section>
</article>
<?php view('lead/case') ?>
<?php getFooter();
