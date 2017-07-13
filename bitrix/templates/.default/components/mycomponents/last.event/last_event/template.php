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
$frame = $this->createFrame()->begin('');
?>
<div class="sb_event">
    <div class="sb_event_header"><h4>Ближайшие события</h4></div>
    <p><a href=""><?=$arResult['ACTIVE_FROM']?>, <?$arResult["PROPERTY_CITY_VALUE"]?></a></p>
    <p><p><?=substr($arResult['PREVIEW_TEXT'],0,70)?>...</p></p>
</div>