<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';



$strReturn .= '<div class="row"><div class="col-xs-12 col-md-12 col-sm-12"><div class="breadcrums"><nav><ul>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? '' : '');
	$child = ($index > 0? '' : '');
	$arrow = ($index > 0? '' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li>
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
					'.$title.'
				</a>
			</li>';
	}
	else
	{
		$strReturn .= '<li><a href="'.$arResult[$index]["LINK"].'">'.$arrow.''.$title.'</a></li>';
	}
}

$strReturn .= '</ul></nav></div></div></div>';

return $strReturn;
