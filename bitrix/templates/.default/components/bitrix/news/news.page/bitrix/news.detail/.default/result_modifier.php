<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$cp = $this->__component;

if($arResult["PROPERTIES"]['AUTHOR']['VALUE']) {
    $rsUser = CUser::GetByID($arResult["PROPERTIES"]['AUTHOR']['VALUE']);
    $arUser = $rsUser->Fetch();
    $arResult['AUTHOR'] = array($arUser["NAME"],$arUser["LAST_NAME"]);
    $cp->SetResultCacheKeys(array(
        "AUTHOR"
    ));
}
$arResult["DETAIL_TEXT_50"] = substr($arResult["DETAIL_TEXT_50"],0,50)."...";
$cp->SetResultCacheKeys(array(
    "DETAIL_TEXT_50"
));
?>