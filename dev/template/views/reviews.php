<?
$reviews = [
    [
        'author' => [
            'photo' => ASSETS_PATH . 'images/reviews/authors/1.webp',
            'name' => 'Марина Иванова',
            'post' => 'Директор стоматологии<br> «ДентаВита»'
        ],
        'text' => 'Нас приятно удивило, насколько верно вы поняли и почувствовали важные для компании тезисы на основании всего лишь одного брифа. Мы заполнили его достаточно подробно, но все-таки это сухая информация. Первая же предложенная концепция органично укладывалась в наше собственно предложен',
        'photoSmall' => ASSETS_PATH . 'images/reviews/1/small.webp',
        'photoBig' => ASSETS_PATH . 'images/reviews/1/big.webp',
        'caseUrl' => '/test/',
        'sourceUrl' => 'https://kwork.ru/'
    ],
    [
        'author' => [
            'photo' => ASSETS_PATH . 'images/reviews/authors/2.webp',
            'name' => 'Иван Карасев',
            'post' => 'Директор стоматологии<br> «ДентаВита»'
        ],
        'text' => 'Нас приятно удивило, насколько верно вы поняли и почувствовали важные для компании тезисы на основании всего лишь одного брифа. Мы заполнили его достаточно подробно, но все-таки это сухая информация. ',
        'photoSmall' => ASSETS_PATH . 'images/reviews/1/small.webp',
        'photoBig' => ASSETS_PATH . 'images/reviews/1/big.webp',
        'caseUrl' => '/test/'
    ],
    [
        'author' => [
            'photo' => ASSETS_PATH . 'images/reviews/authors/1.webp',
            'name' => 'Марина Иванова',
            'post' => 'Директор стоматологии<br> «ДентаВита»'
        ],
        'text' => 'Нас приятно удивило, насколько верно вы поняли и почувствовали важные для компании тезисы на основании всего лишь одного брифа. Мы заполнили его достаточно подробно, но все-таки это сухая информация. Первая же предложенная концепция органично укладывалась в наше собственно предложен asfjahslfkjas jflashfl jassahflajks hlsalf jhaslkfjhasj safljkhaslkfjhaslfk',
        'photoSmall' => ASSETS_PATH . 'images/reviews/1/small.webp',
        'photoBig' => ASSETS_PATH . 'images/reviews/1/big.webp',
        'caseUrl' => '/test/'
    ],
    [
        'author' => [
            'photo' => ASSETS_PATH . 'images/reviews/authors/2.webp',
            'name' => 'Иван Карасев',
            'post' => 'Директор стоматологии<br> «ДентаВита»'
        ],
        'text' => 'Нас приятно удивило, насколько верно вы поняли и почувствовали важные для компании тезисы на основании всего лишь одного брифа. Мы заполнили его достаточно подробно, но все-таки это сухая информация. ',
        'photoSmall' => ASSETS_PATH . 'images/reviews/1/small.webp',
        'photoBig' => ASSETS_PATH . 'images/reviews/1/big.webp',
        'caseUrl' => '/test/'
    ],
]
?>

<? if (!empty($reviews)): ?>
    <section class="section bg-2">
        <div class="container">
            <h2 class="section__title"><span class="color">Отзывы</span> клиентов</h2>
            <ul class="reviews">
                <? foreach ($reviews as $key => $review): ?>
                    <li class="review <?= $key > 2 ? 'd-none' : '' ?>">
                        <div class="review__top">
                            <div class="review__author">
                                <img class="review__author-photo" src="<?= $review['author']['photo'] ?>" alt="Отзыв <?= $review['author']['name'] ?>" />
                                <div class="review__author-name"><?= $review['author']['name'] ?></div>
                                <div class="review__author-post"><?= $review['author']['post'] ?></div>
                            </div>
                            <div class="review__text">
                                <?= $review['text'] ?>
                            </div>
                        </div>
                        <div class="review__bottom">
                            <a href="<?= $review['photoBig'] ?>" data-fancybox="" class="review__photo scale">
                                <img src="<?= $review['photoSmall'] ?>" />
                            </a>
                            <? if ($review['caseUrl']): ?>
                                <a href="<?= $review['caseUrl'] ?>" class="btn review__btn">Смотреть кейс <span data-img-svg data-src="<?= ASSETS_PATH ?>images/icons/arrow.svg"></a>
                            <? endif; ?>
                        </div>
                    </li>
                <? endforeach; ?>
            </ul>
            <? if (count($reviews) > 2): ?>
                <div>
                    <div class="reviews__all">Показать еще отзывы</div>
                </div>

            <? endif; ?>
        </div>
    </section>
<? endif; ?>