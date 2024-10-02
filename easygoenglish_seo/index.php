<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
addHeadString('<script src="' . ASSETS_PATH . 'js/chart.js"></script>');
addHeadString('<script src="/easygoenglish_seo/script.js"></script>');
?>
<?php getHeader(); ?>
<?php view('hero/case', [
    'backgroundColor' => '#EB4961',
    'title' => 'Увеличили поисковый трафик и продвинули 91% запросов в ТОП-5<br> 
для школы английского языка',
    'list' => [
        [
            'number' => '91%',
            'text' => 'Продвигаемых запросов вошли в ТОП-5 выдачи поисковых систем'
        ],
        [
            'number' => '226',
            'text' => 'Рост трафика с нуля до 226 уникальных <br>
посетителей в месяц'
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
                    <p>Компания EasyGoEnglish — это студия английского языка, специализирующаяся на подготовке детей к успешной сдаче ОГЭ и ЕГЭ. На момент обращения к нам у компании отсутствовал сайт, и не была выстроена схема работы по привлечению клиентов из Интернета.</p>
                    <div class="content__project">
                        <div>
                            <span>Сайт</span>
                            <a class="color font-family-2 font-weight link" href="https://easygoenglish.ru" target="_blank">https://easygoenglish.ru</a>
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
                        <li>Разработка сайта и фирменного стиля для компании</li>
                        <li>Продвижение сайта в поисковых системах</li>
                        <li>Привлечение клиентов из интернета к началу набора детей на новый учебный год</li>
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
                    <p>Чтобы сайт после запуска сразу был готов к продвижению, мы на этапе проектирования привлекли к работе SEO-специалиста, который собрал все целевые запросы, подходящие для продвижения.</p>
                    <p>На основании этих запросов проанализировали, кто из конкурентов имеет наибольшую видимость в поисковых системах.</p>
                    <p>Проанализировали их сайты, уникальное торговое предложение, составили матрицу их преимуществ, чтобы понять, за счёт каких факторов поисковые системы их ранжируют на высоких позициях, и выделили для себя основные блоки, на которых нужно сосредоточиться и внедрить на сайт при его разработке.
                    </p>
                    <h3>После разработки сайта — начали активную фазу продвижения:</h3>
                    <ul>
                        <li>Провели внутреннюю оптимизацию сайта</li>
                        <li>Оптимизировали тексты под продвигаемые запросы</li>
                        <li>Зарегистрировали сайт и компанию в основных справочниках: 2GIS, Яндекс Карты, Гугл Карты и ряде тематических каталогов.</li>
                        <li>Начиная с третьего месяца работы начали писать тематические статьи на различных новостных порталах, с ссылками со статей на наш сайт</li>
                        <li> После нескольких месяцев работы, на основании накопленной статистики по поведению пользователей на сайте — внедрили на сайт ряд изменений с целью увеличения конверсии. После появления первых отзывов о работе компании в справочниках — добавили блок с отзывами на сайт.</li>
                        <li>Оптимизировали скорость работы сайта</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-2">
        <div class="container content">
            <div class="content__row">
                <h2>Результат работы</h2>
                <div>
                    <p>За 4 месяца, которые оставались до начала нового учебного года удалось вывести сайт в ТОП выдачи, и привлечь за счёт проделанных работ целевой трафик на сайт:</p>
                    <canvas class="chart" id="chart1"></canvas>
                    <canvas class="chart" id="chart2"></canvas>
                    <p>Так как потенциал ещё оставался, решено было продолжить продвижение сайта, в первую очередь чтобы улучшить видимость сайта в Google. Для этого продолжили оптимизацию сайта, чтобы уже к следующему учебному году иметь сайт с максимальной видимостью в поисковых системах. Спустя 10 месяцев трафик увеличился ещё в 1,5 раза:</p>
                    <canvas class="chart" id="chart3"></canvas>
                    <h3>Позиции сайта в Google</h3>
                    <div class="content__table-container">
                        <table>
                            <thead>
                                <tr>
                                    <td class="bg-gray">Запросы</td>
                                    <td class="bg-gray">Частота</td>
                                    <td class="bg-gray">28.03.2023</td>
                                    <td class="bg-gray">08.06.2022</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>английский сургут</td>
                                    <td class="bg-gray">-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>английский в сургуте</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">4</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>курсы английского</td>
                                    <td class="bg-gray">10</td>
                                    <td class="bg-green">3</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>курсы английского языка</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">6</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>курсы английского в сургуте</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">7</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>школа английского</td>
                                    <td class="bg-gray">0</td>
                                    <td class="bg-green">4</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>школа английского языка сургут</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">4</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>школа английского сургут</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">3</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>школа иностранных языков сургут</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">3</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>английская школа сургут</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">7</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>сургут школа иностранных языков</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">7</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>сургут английская школа</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">7</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>английская школа в сургуте</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">10</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>курсы английского языка сургут</td>
                                    <td class="bg-gray">-</td>
                                    <td class="bg-green">8</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3>Позиции сайта в Яндекс</h3>
                    <div class="content__table-container">
                        <table>
                            <thead>
                                <tr>
                                    <td class="bg-gray">Запросы</td>
                                    <td class="bg-gray">Частота</td>
                                    <td class="bg-gray">28.03.2023</td>
                                    <td class="bg-gray">08.06.2022</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>английский сургут</td>
                                    <td class="bg-gray">3</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>английский в сургуте</td>
                                    <td class="bg-gray">0</td>
                                    <td class="bg-green">6</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>курсы английского</td>
                                    <td class="bg-gray">3</td>
                                    <td class="bg-green">6</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>курсы английского языка</td>
                                    <td class="bg-gray">17</td>
                                    <td class="bg-green">3</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>курсы английского в сургуте</td>
                                    <td class="bg-gray">0</td>
                                    <td class="bg-green">3</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>школа английского</td>
                                    <td class="bg-gray">0</td>
                                    <td class="bg-green">2</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>школа английского языка сургут</td>
                                    <td class="bg-gray">11</td>
                                    <td class="bg-green">2</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>школа английского сургут</td>
                                    <td class="bg-gray">0</td>
                                    <td class="bg-green">2</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>школа иностранных языков сургут</td>
                                    <td class="bg-gray">14</td>
                                    <td class="bg-green">2</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>английская школа сургут</td>
                                    <td class="bg-gray">9</td>
                                    <td class="bg-green">2</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>сургут школа иностранных языков</td>
                                    <td class="bg-gray">14</td>
                                    <td class="bg-green">2</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>сургут английская школа</td>
                                    <td class="bg-gray">9</td>
                                    <td class="bg-green">3</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>английская школа в сургуте</td>
                                    <td class="bg-gray">0</td>
                                    <td class="bg-green">2</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>курсы английского языка сургут</td>
                                    <td class="bg-gray">17</td>
                                    <td class="bg-green">5</td>
                                    <td>-</td>
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
