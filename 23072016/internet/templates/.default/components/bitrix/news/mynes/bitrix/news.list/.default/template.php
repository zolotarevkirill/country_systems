<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="row margin-b-30 f-size-16">
    <h1 class="text-primary">Новости</h1>
</div>
<?php foreach($arResult["ITEMS"] as $arItem):?>
<div class="row margin-b-30 f-size-16">
    <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="item-search">
            <p class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a>
        </div>
    </div>
</div>
<?php endforeach;?>

		