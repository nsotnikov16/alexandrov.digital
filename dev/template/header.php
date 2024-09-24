<? require_once __DIR__ . '/head.php' ?>

<header class="header bg-2">
    <div class="container">
        <div class="header__wrapper">
            <a href="/" class="logo header__logo">Alexandrov.<span class="color">Digital</span></a>
            <div class="header__menu-wrapper">
                <nav class="header__nav">
                    <a href="/seo/" class="header__nav-link <?= checkUrl('/seo') ? 'link link_active' : '' ?>">SEO продвижение</a>
                    <a href="/advertising/" class="header__nav-link <?= checkUrl('/advertising') ? 'link link_active' : '' ?>">Контекстная реклама </a>
                    <a href="/development/" class="header__nav-link <?= checkUrl('/devevelopment') ? 'link link_active' : '' ?>">Разработка сайтов</a>
                </nav>
            </div>
            <div class="header__contacts">
                <a class="phone" href="<?= getHrefForPhone(PHONE) ?>"><?= PHONE ?></a>
                <? view('messengers', ['addClass' => 'header__messengers']) ?>
            </div>

            <div class="header__mob-container">
                <a href="<?= getHrefForPhone(PHONE) ?>" class="icon-phone header__mob-phone">
                    <span data-img-svg data-src="<?= ASSETS_PATH ?>images/icons/phone.svg">
                </a>
                <button class="header__mob-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>


            <div class="header__mob">
                <nav class="header__nav">
                    <a href="/seo/" class="header__nav-link <?= checkUrl('/seo') ? 'link link_active' : '' ?>">SEO продвижение</a>
                    <a href="/advertising/" class="header__nav-link <?= checkUrl('/advertising') ? 'link link_active' : '' ?>">Контекстная реклама </a>
                    <a href="/development/" class="header__nav-link <?= checkUrl('/devevelopment') ? 'link link_active' : '' ?>">Разработка сайтов</a>
                    <a href="/reviews/" class="header__nav-link <?= checkUrl('/devevelopment') ? 'link link_active' : '' ?>">Отзывы</a>
                    <a href="/contacts/" class="header__nav-link <?= checkUrl('/contacts') ? 'link link_active' : '' ?>">Контакты</a>
                </nav>
                <div class="header__contacts">
                    <a class="phone" href="<?= getHrefForPhone(PHONE) ?>"><?= PHONE ?></a>
                    <p>Пишите в мессенджеры</p>
                    <? view('messengers', ['addClass' => 'header__messengers']) ?>
                </div>

                <div class="header__mob-bottom">
                    <p class="logo header__logo">Alexandrov.<span class="color">Digital</span></p>
                    <p class="copyright header__mob-copyright">© Alexandrov.Digital, 2024</p>
                </div>
            </div>
        </div>

    </div>

</header>

<main>
    <? // require_once(__DIR__ . '/views/breadcrumbs.php') 
    ?>