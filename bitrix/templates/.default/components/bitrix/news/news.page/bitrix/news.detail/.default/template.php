<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(is_array($arResult["DETAIL_PICTURE"])):?>
    <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" align="center" alt="<?=$arResult["NAME"]?>"/>
<?endif;?>
<p><?echo $arResult["DETAIL_TEXT"];?></p>
<?if($arResult['AUTHOR']):?>
    Автор:<?=$arResult["AUTHOR"]['0']?>
<?endif;?>
