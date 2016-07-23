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
<div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="col-xs-6 col-md-3">
    <a href="<?=$arItem['PROPERTIES']['link']['~VALUE']?>" target="_blank" class="thumbnail">
      <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
    </a>
     </div>
<?endforeach;?>
</div>