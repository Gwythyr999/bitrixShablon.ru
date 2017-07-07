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
<div class="cn_hp_lastnews">
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <h3><a href="/news/index.php">Новости</a></h3>
        <ul>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <li>
                <h4><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></a></h4>
                <p><?echo $arItem["NAME"];?></p>
            </li>
            <?endforeach;?>
        </ul>
        <br/>
        <a href="/news/index.php" class="cn_hp_lastnews_more">Все новости &rarr;</a>
    <div class="clearboth"></div>
</div>
