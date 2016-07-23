<!DOCTYPE html>
<html lang="ru_RU"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="ROBOTS" content="ALL">
<meta name='yandex-verification' content='7d105278032b91af' />

        <?php $APPLICATION->ShowMeta("keywords") ?>
        <?php $APPLICATION->ShowMeta("description") ?>
        <title><?php $APPLICATION->ShowTitle(); ?> | www.country-systems.ru</title>
        <link href='/bitrix/templates/.default/assets/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="/bitrix/templates/.default/assets/js/my.js"></script>
        <link href='/bitrix/templates/.default/assets/css/my.css' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
    </head>
    <?php $APPLICATION->ShowHeadStrings(); ?>
    <?php if ($USER->IsAdmin()): ?>
        <?php $APPLICATION->ShowHead(); ?>
    <?php endif; ?>
    <body>
    <div class="close-nav"></div>
    <offcanvas class="offcanvas" data-item="offcanvas">
        <div class="offcanvas-header">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="my-flex">
                        <div>
                            <button class="btn offcanvas-btn" data-item="offcanvas-menu">
                                <i class="glyphicon glyphicon-menu-right"></i>
                            </button>
                        </div>
                        <div>
                            <h3>Навигация</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-underheader">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    
                </div>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="viewport-menu">
                <div class="offcanvas-body-item">
                    <div class="my-navigation my-navigation--has-inner my-navigation--flex">
                        <nav>
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:menu", "main_menu", Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "COMPONENT_TEMPLATE" => "main_menu",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "2",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N"
                                    )
                            );
                            ?>
                        </nav>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="offcanvas-footer">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <hr class="line" />
                </div>
            </div>
            <div class="offcanvas-footer-lvl-1">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                       <a href="#" class="phone" style="font-size: 15px;">+7-499-322-96-71</a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <hr class="line" />
                </div>
            </div>

            <div class="offcanvas-footer-lvl-2">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                        <button type="button" class="btn btn-primary apply full-width" data-toggle="modal" data-target="#call"><span>Подключиться</span></button>
                    </div>
                </div>
            </div>
        </div>
    </offcanvas>
        <?php if ($USER->IsAdmin()): ?>   
            <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>    
        <?php endif; ?>
        <div class="sticky-page">
            <section class="offcanvas-bar visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="offcanvas-nav my-flex">
                                <div>
                                    <a href="/" class="logo"><img  src="/bitrix/templates/.default/assets/img/logo.png" alt=""></a>
                                </div>
                                <div>
                                    <button type="button" class="navbar-toggle collapsed" data-item="offcanvas-menu">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="header hidden-xs ">
                <section class="header-lvl-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-3 col-sm-3">
                                <a href="/" class="logo"><img  src="/bitrix/templates/.default/assets/img/logo.png" alt=""></a>
                            </div>
                            <div class="col-xs-12 col-md-4 col-sm-5">
                                <div class="my-navigation my-navigation--flex my-navigation--flex-center">
                                    <nav>
                                        <ul>
                                            <li><a href="#" class="icon icon-3">Ежедневно с 10:00 до 19:00</a></li>
                                            <li><a href="mailto:info@country-systems.ru" class="icon icon-4">г.Москва Улица Зеленодольская, владение 43</a></li>
                                        </ul>
                                    </nav>	
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5 col-sm-4 text-right">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8 col-sm-12">
                                        <a href="#" class="phone" style="font-size: 18px;">+7-499-322-96-71</a>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-4 col-sm-12">
                                        <button type="button" class="btn btn-primary apply" data-toggle="modal" data-target="#call"><span>Подключиться</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="header-lvl-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-sm-12">
                                <div class="my-navigation my-navigation--has-inner my-navigation--flex">
                                    <nav>
                                        <?php
                                        $APPLICATION->IncludeComponent(
                                                "bitrix:menu", "main_menu", Array(
                                            "ALLOW_MULTI_SELECT" => "N",
                                            "CHILD_MENU_TYPE" => "left",
                                            "COMPONENT_TEMPLATE" => "main_menu",
                                            "DELAY" => "N",
                                            "MAX_LEVEL" => "2",
                                            "MENU_CACHE_GET_VARS" => array(),
                                            "MENU_CACHE_TIME" => "3600",
                                            "MENU_CACHE_TYPE" => "N",
                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                            "ROOT_MENU_TYPE" => "top",
                                            "USE_EXT" => "N"
                                                )
                                        );
                                        ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="content">
                