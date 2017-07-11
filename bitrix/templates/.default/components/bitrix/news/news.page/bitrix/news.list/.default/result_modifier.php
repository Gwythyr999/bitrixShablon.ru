<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
foreach ($arResult["ITEMS"] as $ID=>$arItems){
    $arImage=CFile::ResizeImageGet($arItems['DETAIL_PICTURE'], array('width'=>$arParams['LIST_PREV_PICT_W'], 'height'=>$arParams['LIST_PREV_PICT_H']), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["ITEMS"][$ID]['DETAIL_PICTURE']=$arImage;
}

///
$arTempID = array();

foreach ($arResult["ITEMS"] as $elem){
    $arTempID[] = $elem["PROPERTIES"]["LINK_CAT"]["VALUE"];

}

$arSort = false;
$arFilter = array(
    "IBLOCK_ID"=>IBLOCK_CAT_ID,
    "ACTIVE"=> "Y",
    "ID"=>$arTempID,
);

$arGroupBy = false;
$arNavStartParams = array("nTopCount"=> 50);
$arSelect = array("ID","NAME","DETAIL_PAGE_URL","PROPERTY_PRICE","PROPERTY_SIZE");
$BDRes = CIBlockElement::GetList(
    $arSort,
    $arFilter,
    $arGroupBy,
    $arNavStartParams,
    $arSelect
);

$arResult["CAT_ELEM"] = array();
while ($arRes = $BDRes->GetNext()){
    $arResult["CAT_ELEM"][$arRes["ID"]] = $arRes;
}
dump( $arResult["CAT_ELEM"][$arRes["ID"]]);

?>