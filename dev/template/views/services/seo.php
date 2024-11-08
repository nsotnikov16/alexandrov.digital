<?
$services = [
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/seo/standart.svg',
            'alt' => 'Стандартное продвижение'
        ],
        'name' => 'Стандартное продвижение',
        'description' => 'Берём на себя все работы по SEO. Составляем рекомендации, вносим изменения через админ-панель сайта. Все технические правки внедряет ваш специалист.',
        'price' => 'от  <span class="big">25 000</span> <span class="currency">₽/мес</span>',
        'deadline' => 'Срок от 3-х месяцев',
        'button' => [
            'text' => 'Оставить заявку'
        ],
    ],
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/seo/key.svg',
            'alt' => 'Продвижение под ключ'
        ],
        'name' => 'Продвижение<br> под ключ',
        'description' => 'Все доработки по сайту мы берём на себя. Включая доработку функционала, его техническую оптимизацию.',
        'price' => 'от  <span class="big">40 000</span> <span class="currency">₽/мес</span>',
        'deadline' => 'Срок от 3-х месяцев',
        'button' => [
            'text' => 'Оставить заявку',
        ],
    ],
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/seo/one.svg',
            'alt' => 'Разовая оптимизация сайта'
        ],
        'name' => 'Разовая оптимизация сайта',
        'description' => 'Для быстрого старта, можно рассмотреть разработку сайта на базе готового 
шаблона.',
        'price' => 'от  <span class="big">30 000</span> <span class="currency">₽/мес</span>',
        'deadline' => 'Срок 1 месяц',
        'button' => [
            'text' => 'Оставить заявку',
        ],
    ],
]
?>
<? if (!empty($services)): ?>
    <section class="section">
        <div class="container">
            <h2 class="section__title"><span class="color">Стоимость</span> SEO продвижения<br>
                сайтов в Сургуте </h2>
            <ul class="services services_inner">
                <? foreach ($services as $service) {
                    view('service', $service);
                } ?>
            </ul>
            <? view('note', ['text' => 'Это примерная стоимость, чтобы вам было удобнее сориентироваться.<br> 
Обычно, итоговая стоимость не сильно отличается от указанной. Но каждый проект уникален, поэтому оценивается индивидуально.']) ?>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title"><span class="color">Цены на продвижение</span><br>
                некоторых тематик в Сургуте</h2>
            <div class="content content_services">
                <ul class="disc-color font-family-2 font-medium">
                    <li>Стоматология: 40 000 ₽/месяц</li>
                    <li>Медицинский центр: 50 000 ₽/месяц</li>
                    <li>Строительство домов: 45 000 ₽/месяц</li>
                    <li>Курсы иностранных языков: 35 000 ₽/месяц</li>
                    <li>Производство металлоконструкций: 45 000 ₽/месяц</li>
                </ul>
            </div>
        </div>
    </section>
<? endif; ?>