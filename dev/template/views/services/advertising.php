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