<?
$services = [
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/dev.svg',
            'alt' => 'Разработка сайтов'
        ],
        'name' => 'Разработка сайтов',
        'description' => 'Разработаем удобный, продающий сайт   исходя из ваших задач и бюджета. Сайт 
            будет решать ваши маркетинговые  
            задачи и приносить клиентов',
        'price' => 'от  <span class="big">40 000</span> <span class="currency">₽</span>',
        'deadline' => '',
        'button' => [
            'text' => 'Подробнее',
            'url' => '/development/'
        ],
        'url' => '/development/'
    ],
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/adv.svg',
            'alt' => 'Контекстная реклама'
        ],
        'name' => 'Контекстная реклама',
        'description' => 'Полноценная рекламная кампания с полным охватом целевой аудитории. Ориентируемся
        на бизнес-показатели, а не «синтетические» метрики',
        'price' => 'от  <span class="big">8 000</span> <span class="currency">₽/мес</span>',
        'deadline' => '',
        'button' => [
            'text' => 'Подробнее',
            'url' => '/advertising/'
        ],
        'url' => '/advertising/'
    ],
    [
        'img' => [
            'src' => ASSETS_PATH . 'images/services/seo.svg',
            'alt' => 'Продвижение сайтов'
        ],
        'name' => 'Продвижение сайтов',
        'description' => 'Берём на себя все работы по SEO продвижению сайта. Составляем рекомендации, вносим изменения, увеличиваем трафик и позиции',
        'price' => 'от  <span class="big">25 000</span> <span class="currency">₽/мес</span>',
        'deadline' => '',
        'button' => [
            'text' => 'Подробнее',
            'url' => '/seo/'
        ],
        'url' => '/seo/'
    ],
]
?>

<section class="section bg-2">
    <div class="container">
        <h2 class="section__title">Наши услуги</h2>
        <div class="services">
            <? foreach ($services as $service) {
                view('service', $service);
            } ?>
        </div>
    </div>
</section>