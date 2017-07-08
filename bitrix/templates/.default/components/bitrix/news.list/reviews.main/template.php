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
<script type="text/javascript" >
    $(document).ready(function(){

        $("#foo").carouFredSel({
            items:2,
            prev:'#rwprev',
            next:'#rwnext',
            scroll:{
                items:1,
                duration:2000
            }
        });
    });
</script>

<div class="rw_reviewed">
    <div class="rw_slider">
        <h4>Отзывы</h4>
        <ul id="foo">
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <li>
                <div class="rw_message">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                         alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                         title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="rw_avatar"/>
                    <span class="rw_name"><?echo $arItem["NAME"]?></span>
                    <span class="rw_job"><? if($arItem["PROPERTIES"]["POSITION"]["VALUE"]):
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
                    <div class="rw_arrow"></div>
                </div>
            </li>
            <?endforeach;?>
        </ul>
        <div id="rwprev"></div>
        <div id="rwnext"></div>
        <a href="/company/otzyvy.php" class="rw_allreviewed">Все отзывы</a>
    </div>
</div>