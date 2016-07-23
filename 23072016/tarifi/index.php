<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Видеонаблюдение на дачу");
$APPLICATION->SetPageProperty("title", "Видеонаблюдение на дачу");
$APPLICATION->SetPageProperty("keywords", "Видеонаблюдение на дачу");
$APPLICATION->SetPageProperty("description", "Видеонаблюдение на дачу - это новая услуга «Country-Systems», которая позволит Вам всегда неизмиримо присутствовать дома.");
$APPLICATION->SetTitle("Видеонаблюдение на дачу");
?>
<style>

    .client-service {
        border-top: 1px dashed #5f4943;
        border-bottom: 1px dashed #5f4943;
        border-right: 1px dashed #5f4943;
        border-bottom-right-radius: 12px;
        position: relative;
        color: #282828;
        margin: 36px 265px 36px 55px;
        height: 210px;
        width: 100%;
    }
    .client-service::before {
        position: absolute;
        display: block;
        content: '';
        width: 100px;
        height: 212px;
        top: -1px;
        right: 100%;
        background: url(client-service-bg-3.png) 0 0 no-repeat transparent;
    }
    .client-service {
        color: #282828;
    }

    .client-service div::before {
        width: 137px;
        height: 200px;
        left: 14px;
        background: url(client-service-bg-2.png) 0 0 no-repeat transparent;
        bottom: 1px;
    }

    .client-service div::before, .client-service div::after {
        position: absolute;
        display: block;
        content: '';
        bottom: 0;
    }

    .client-service h3 {
        margin-bottom: 16px;
    }

    .client-service p.custom-paragraph {
        font-size: 40px;
        line-height: 1;
        text-align: center;
        padding: 5px;
    }
    .client-service div::after {
        width: 123px;
        height: 184px;
        right: 22px;
        background: url(client-service-bg-1.png) 0 0 no-repeat transparent;
    }

    h1 strong, h2 strong, h3 strong, h4 strong, h5 strong, .data-table th, h1 b, h2 b, h3 b, h4 b, h5 b {
        font-weight: normal;
        font-family: 'officinaserifcbold';
        color:#0fbe7c;
    }

    .client-service p b {
        font-family: 'officinaserifcbold';
        white-space: nowrap;
    }
    #mydiv{
        padding: 70px; 
        height: 100%; 
        background: none;
    }
    #mydiv2{
        width: 50%;
    }
    @media (min-width:900px) and (max-width: 1000px) {
        #myimg{
            display: none !important;
        }
    }
    @media (min-width:0px) and (max-width: 800px) {
        #mydiv{
            width: 100% !important;
            background: #fff !important;
            padding: 20px #fff!important;
        }
        #mydiv2{
            width: 100%;
        }
        .client-service{
            display: none  !important;
        }
        #myimg{
            display: none  !important;
        }
    }
</style>
<div class="container">
    <?php
    $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb", "mynav", Array(
        "COMPONENT_TEMPLATE" => ".default",
        "PATH" => "",
        "SITE_ID" => "-",
        "START_FROM" => "0"
            )
    );
    ?>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <img src="/upload/1.png" class="full-width margin-b-30" alt="">
            <!--insert form-->
        </div>
    </div>

    <div class="row margin-b-30">
        <div class="col-xs-12 col-md-12 col-sm-12 f-size-16">
            <p><span class="text-primary">Наши эксклюзивные тарифы это:</span></p>
            <ul class="styled-ul">
                <li>
                    <p>Безлимит без ограничений по трафику: качайте любые файлы: фильмы, игры, музыку.</p>
                </li>
                <li>
                    <p>Поддержка стандартов 2G/3G/4G/4G+</p>
                </li>
                <li>
                    <p>География действия тарифов – вся Россия ( исключения республика Крым).</p>
                </li>
                <li>
                    <p>Блокировка действия тарифов до 180 дней</p>
                </li>
            </ul>

        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">

            <div class="row margin-b-30">


                <script>
                    $(document).ready(function () {
                        var owl = $("#owl-demos");
                        owl.owlCarousel({
                            items: 3,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 1
                                },
                                1000: {
                                    items: 3
                                }
                            },
                            autoplay: true
                            
                        });



                        $(".next").click(function () {
                            owl.trigger('owl.next');
                        })
                        $(".prev").click(function () {
                            owl.trigger('owl.prev');
                        })

                    });

                </script>
                <style>
                    #owl-demos .item{
                        margin: 5px;

                    }
                    .owl-next{
                        display: block !important;
                        width: 30px !important;
                        height: 20px !important;
                        text-indent: -9999px !important;
                        background: url(right.png) 0 0 no-repeat !important;
                        background-size: cover !important;
                        position: absolute !important;
                        top: 45% !important;
                        right: -8% !important;
                    }
                    .owl-prev{
                        display: block !important;
                        width: 30px !important;
                        height: 19px !important;
                        text-indent: -9999px !important;
                        background: url(left.png) 0 0 no-repeat !important;
                        background-size: cover !important;
                        position: absolute !important;
                        top: 45% !important;
                        left: -8% !important;
                    }

                </style>





                <div class="col-xs-12 col-md-12 col-sm-12 f-size-16">
                    <h2 style="text-align: center;">Эксклюзивные тарифы</h2><br/>

                    <div id="owl-demos" class="owl-carousel ">
                        <div class="item">
                            <div class="new-features-two">
                                <img src="beeline.png" style="max-width: 160px; margin: 0px auto; padding: 10px;"/>
                                <ul style="margin-bottom: 37px;">
                                    <li>
                                        <p>
                                            Оформляется на паспорт абонента
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Скорость до 150 мбит/сек без ограничений
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Уведомления и Отчеты на Электронную почту
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Регистрация и активация тарифа в течении 24 часов
                                        </p>
                                    </li>

                                </ul>
                                <div class="features-price-two">
                                    <div>
                                        <h3>690</h3>
                                    </div>
                                    <div>
                                        <p class="unit">
                                            руб
                                        </p>
                                        <p class="unit">
                                            в месяц
                                        </p>
                                    </div>
                                </div>
                                <br/>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-ghost" data-toggle="modal" data-target="#call">Выбрать</button>
                                </div>

                            </div>

                        </div>
                        <div class="item">
                            <div class="new-features-two">
                                <img src="mts.png" style="max-width: 145px; margin: 0px auto; padding: 10px;"/>
                                <ul style="margin-bottom: 37px;">
                                    <li>
                                        <p>
                                            Активация в течении 15-30 мин
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Скорость до 150 мбит/сек без ограничений 
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Регистрация и активация тарифа в течении часа
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Корпоративный тариф 
                                        </p>
                                    </li>

                                </ul>
                                <div class="features-price-two">
                                    <div>
                                        <h3>300</h3>
                                    </div>
                                    <div>
                                        <p class="unit">
                                            руб
                                        </p>
                                        <p class="unit">
                                            в месяц
                                        </p>
                                    </div>
                                </div>
                                <br/>
                                <br/>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-ghost" data-toggle="modal" data-target="#call">Выбрать</button>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="new-features-two">
                                <img src="megafon.png" style="max-width: 141px; margin: 0px auto; padding: 10px;"/>
                                <ul style="margin-bottom: 37px;">
                                    <li>
                                        <p>
                                            Скорость до 150 мбит/сек без ограничений
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Возможно подключение статического ip адреса 
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Активация в течение 24 часов 
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Оформление на паспорт абонента 
                                        </p>
                                    </li>

                                </ul>
                                <div class="features-price-two">
                                    <div>
                                        <h3>750</h3>
                                    </div>
                                    <div>
                                        <p class="unit">
                                            руб
                                        </p>
                                        <p class="unit">
                                            в месяц
                                        </p>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <br/>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-ghost" data-toggle="modal" data-target="#call">Выбрать</button>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="new-features-two">
                                <img src="megafon.png" style="max-width: 141px; margin: 0px auto; padding: 10px;"/>
                                <ul style="margin-bottom: 37px;">
                                    <li>
                                        <p>
                                            Корпоративный тариф
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Скорость до 150 мбит/сек без ограничений
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Сим-карта изначально оформлена на компанию, после активации можно переоформить на абонента
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Возможно подключение статического ip адреса
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Активация в течение 24 часов
                                        </p>
                                    </li>

                                </ul>
                                <div class="features-price-two">
                                    <div>
                                        <h3>350</h3>
                                    </div>
                                    <div>
                                        <p class="unit">
                                            руб
                                        </p>
                                        <p class="unit">
                                            в месяц
                                        </p>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-ghost" data-toggle="modal" data-target="#call">Выбрать</button>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">








                    </div>

                    <div class="col-xs-12 col-md-12 col-sm-12 f-size-16">
                        <div class="client-service">
                            <div>
                                <h3 align="center"><b>Стать клиентом</b></h3>
                                <p class="custom-paragraph"><b class="nobr">+7-499-322-96-71<span style="display: none;">_</span></b></p>
                                <h4 align="center">
                                    <button type="button" class="btn btn-primary apply" data-toggle="modal" data-target="#call"><span>Заказать обратный звонок</span></button>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="row margin-b-30">
                        <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                            <a href="#" class="btn btn-primary btn-ghost width-fix btn-big" data-toggle="modal" data-target="#call">Подключить</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>




        </div>


    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>