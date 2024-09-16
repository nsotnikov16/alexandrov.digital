<?
$services = [
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/advertising/start.svg',
            'alt' => 'Быстрый старт'
        ],
        'name' => 'Быстрый старт',
        'description' => 'Для быстрого тестирования новой ниши, услуги или небольших узкопрофильных тематик.',
        'price' => 'от  <span class="big">8 000</span> <span class="currency">₽/мес</span>',
        'deadline' => 'Срок 2-3 дня',
        'button' => [
            'text' => 'Оставить заявку'
        ],
    ],
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/advertising/standart.svg',
            'alt' => 'Стандарт'
        ],
        'name' => 'Стандарт',
        'description' => 'Полноценная рекламная кампания с полным охватом целевой аудитории + отдельные рекламные кампании на определенные сегменты.',
        'price' => 'от  <span class="big">17 000</span> <span class="currency">₽/мес</span>',
        'deadline' => 'Срок 4-6 дней',
        'button' => [
            'text' => 'Оставить заявку',
        ],
    ],
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/advertising/premium.svg',
            'alt' => 'Премиум'
        ],
        'name' => 'Премиум',
        'description' => 'Для больших рекламных кампаний в конкурентных тематиках. Подключение и настройка аналитики входит в стоимость',
        'price' => 'от  <span class="big">30 000</span> <span class="currency">₽/мес</span>',
        'deadline' => 'Срок от 5 дней',
        'button' => [
            'text' => 'Оставить заявку',
        ],
    ],
]
?>
<? if (!empty($services)): ?>
    <section class="section">
        <div class="container">
            <h2 class="section__title"><span class="color">Стоимость</span> ведения контекстной рекламы</h2>
            <ul class="services services_inner">
                <? foreach ($services as $service) {
                    view('service', $service);
                } ?>
            </ul>
        </div>
    </section>
<? endif; ?>