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
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="sb_reviewed">
    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
         width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
         height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
         alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
         title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="sb_rw_avatar"/>
    <span class="sb_rw_name"><?echo $arItem["NAME"]?></span>
    <span class="sb_rw_job">
        <? if($arItem["PROPERTIES"]["POSITION"]["VALUE"]):
            echo $arItem["PROPERTIES"]["POSITION"]["VALUE"]?>
        <?endif;?>
        <? if($arItem["PROPERTIES"]["NAME_COMPANY"]["VALUE"]):
            echo $arItem["PROPERTIES"]["NAME_COMPANY"]["VALUE"]?>
        <?endif;?>
    </span>
    <p><?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
        <?echo $arItem["PREVIEW_TEXT"];?>
        <?endif;?>
    </p>
    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>
<?endforeach;?>
