<?php
$breadcrumbs = ['/contacts/' => 'Контакты'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<section class="section">
    <div class="container">
        <h1 class="page-title color">Звоните, пишите</h1>
        <div class="contacts">
            <div class="contacts__call bg-2">
                <span class="contacts__svg" data-img-svg data-src="<?= ASSETS_PATH ?>images/contacts/call.svg"></span>
                <p class="contacts__text">Звоните в любой день с 9 до 21</p>
                <a href="<?= getHrefForPhone(PHONE) ?>" class="phone contacts__phone"><?= PHONE ?></a>
            </div>
            <div class="contacts__message bg-2">
                <span class="contacts__svg" data-img-svg data-src="<?= ASSETS_PATH ?>images/contacts/message.svg"></span>
                <p class="contacts__text">Пишите в любое время</p>
                <?= view('messengers', ['addClass' => 'contacts__messengers']) ?>
            </div>
            <div class="contacts__requisites bg-2">
                <div class="contacts__requisites-top">
                    <span class="contacts__svg" data-img-svg data-src="<?= ASSETS_PATH ?>images/contacts/requisites.svg"></span>
                    <p class="contacts__text">Реквизиты ИП</p>
                    <div class="contacts__requisites-list">
                        <div>
                            <span>Получатель</span>
                            <span>Иванов Иван Иванович</span>
                        </div>
                        <div>
                            <span>Номер счета</span>
                            <span>40817810300111022445</span>
                        </div>
                        <div>
                            <span>БИК</span>
                            <span>044525974</span>
                        </div>
                        <div>
                            <span>Банк-получатель</span>
                            <span>АО "ТБанк"</span>
                        </div>
                        <div>
                            <span>Корр. счет</span>
                            <span>30101810145250000974</span>
                        </div>
                        <div>
                            <span>ИНН</span>
                            <span>7710140679</span>
                        </div>
                        <div>
                            <span>КПП</span>
                            <span>771301001</span>
                        </div>
                    </div>
                </div>
                <div class="contacts__requisites-bottom">
                    <a href="#<сюда_ссылку_на_документ_лучше_pdf>" class="btn btn_color w-100" download="">Скачать реквизиты</a>
                </div>

            </div>
            <div class="contacts__office bg-2">
                <span class="contacts__svg" data-img-svg data-src="<?= ASSETS_PATH ?>images/contacts/office.svg"></span>
                <div class="contacts__office-title">Офис</div>
                <p class="contacts__text">г. Сургут, Иосифа Каролинского 16, оф. 5</p>
            </div>
        </div>
    </div>
</section>
<?php view('lead/main');?>
<?php getFooter();
