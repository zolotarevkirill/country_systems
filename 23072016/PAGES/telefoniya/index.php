<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Цифровая телефоная на дачу");
$APPLICATION->SetPageProperty("title", "Цифровая телефоная на дачу");
$APPLICATION->SetPageProperty("keywords", "Цифровая телефоная на дачу");
$APPLICATION->SetPageProperty("description", "Установка и настройка цифровой телефонии на дачу или в загородный дом в Москве и МО.");
$APPLICATION->SetTitle("Цифровая телефоная на дачу");
?>
<div class="container">
    <?php
$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"mynav",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "",
		"SITE_ID" => "-",
		"START_FROM" => "0"
	)
);?>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <img src="/upload/telefon.jpg" class="full-width margin-b-30" alt="">
            <!--insert form-->
        </div>
    </div>
    <div class="row margin-b-30">
        <div class="col-xs-12 col-md-12 col-sm-12 f-size-16">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                    <h1>Цифровая телефония</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-b-30">
        <div class="col-xs-12 col-md-12 col-sm-12 f-size-16">
            <p>Проходят годы, меняются технологии, но самый уютный способ общения, с любимыми, которые далеко от нас, это Домашний телефон. Он тоже обновляется  и в настоящее время «Country-Systems» преимущественно оказывает услуги местной телефонной связи на базе цифровых технологий.</p>
            <ul class="styled-ul">
                <li>
                    <p>Прямой городской номер в кодах 495 и 499 на даче БЕСПЛАТНО.</p>
                </li>
                <li>
                    <p>Возможность использовать телефон как дома, так и на даче</p>
                </li>
                <li>
                    <p>Самые дешевые звонки по городу и стране от 1.8 руб за минуту.</p>
                </li>
                <li>
                    <p>Телефонный аппарат от 3 000 руб.</p>
                </li>
            </ul>
            <br/><br/>
        </div>

        <div class="row margin-b-30">
            <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                <a href="#" class="btn btn-primary btn-ghost width-fix btn-big" data-toggle="modal" data-target="#call">Бесплатная консультация</a>
            </div>
        </div>

    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>