<?
$services = [
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/development/landing.svg',
            'alt' => 'Landing Page'
        ],
        'name' => 'Landing Page',
        'description' => 'Хорошо работает для моноуслуг, либо 
для тестирования ниши с помощью контекстной рекламы',
        'price' => 'от  <span class="big">50 000</span> <span class="currency">₽</span>',
        'deadline' => 'Сроки от 2-х недель',
        'button' => [
            'text' => 'Оставить заявку'
        ],
    ],
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/development/corporate.svg',
            'alt' => 'Корпоративный сайт'
        ],
        'name' => 'Корпоративный сайт',
        'description' => 'Для компаний с большим кол-ом услуг, продуманной структурой и уникальным дизайном',
        'price' => 'от  <span class="big">150 000</span> <span class="currency">₽</span>',
        'deadline' => 'Срок от 2-х месяцев',
        'button' => [
            'text' => 'Оставить заявку',
        ],
    ],
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/development/template.svg',
            'alt' => 'На готовом шаблоне'
        ],
        'name' => 'На готовом шаблоне',
        'description' => 'Для быстрого старта, можно рассмотреть разработку сайта на базе готового 
шаблона.',
        'price' => 'от  <span class="big">40 000</span> <span class="currency">₽/мес</span>',
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
            <h2 class="section__title"><span class="color">Стоимость</span> разработки сайтов в Сургуте</h2>
            <ul class="services services_inner">
                <? foreach ($services as $service) {
                    view('service', $service);
                } ?>
            </ul>
        </div>
    </section>
<? endif; ?>