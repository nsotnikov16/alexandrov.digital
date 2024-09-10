</main>

<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <a href="/" class="logo footer__logo">Alexandrov.<span class="color">Digital</span></a>
            <div class="footer__menu-wrapper">
                <nav class="footer__nav">
                    <a href="/seo/" class="footer__nav-link">SEO продвижение</a>
                    <a href="/advertising/" class="footer__nav-link">Контекстная реклама </a>
                    <a href="/devevelopment/" class="footer__nav-link">Разработка сайтов</a>
                </nav>
                <nav class="footer__nav">
                    <a href="/seo/" class="footer__nav-link">Отзывы</a>
                    <a href="/advertising/" class="footer__nav-link">Контакты</a>
                    <a href="/devevelopment/" class="footer__nav-link">Политика конфиденциальности</a>
                </nav>
            </div>
            <div class="footer__contacts">
                <a href="<?= getHrefForPhone(PHONE) ?>" class="phone footer__phone"><?= PHONE ?></a>
                <p>Пишите в мессенджеры</p>
                <? view('messengers', ['addClass' => 'footer__messengers']) ?>
            </div>
            <p class="copyright footer__copyright">© Alexandrov.Digital, 2024<?= date('Y') === '2024' ? '' : (' - ' . date('Y')) ?></p>
        </div>
    </div>
</footer>

<div class="btn-up btn-up-hide"></div>
<? include_once __DIR__ . '/scripts.php' ?>
</body>

</html>