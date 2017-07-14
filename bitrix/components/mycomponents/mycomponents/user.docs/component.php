<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*************************************************************************
Processing of received parameters
 *************************************************************************/
if(!isset($arParams["CACHE_TIME"]))
    $arParams["CACHE_TIME"] = 180;
echo '<pre>';
print_r($arParams);
echo '</pre>';
$arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);
if($arParams['IBLOCK_ID'] > 0 && $this->StartResultCache(false, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))
{
    if(!CModule::IncludeModule("iblock"))
    {
        $this->AbortResultCache();
        ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
        return;
    }
    //SELECT
    $arSelect = array(
        "ID",
        "IBLOCK_ID",
        "CODE",
        "IBLOCK_SECTION_ID",
        "NAME",
        "PROPERTY_FILE",
        "PROPERTY_USER",
    );
    //WHERE
    $arFilter = array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ACTIVE"=>"Y",
        "CHECK_PERMISSIONS"=>"Y",
    );
    if($arParams["PARENT_SECTION"]>0)
    {
        $arFilter["SECTION_ID"] = $arParams["PARENT_SECTION"];
        $arFilter["INCLUDE_SUBSECTIONS"] = "Y";
    }
    //ORDER BY
    $arSort = array(
        "SORT"=>"ASC",
    );
    //EXECUTE
    $rsIBlockElement = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
    $navElement = array();
    while($arResult = $rsIBlockElement->GetNext()):
    {
        $navElement[] = $arResult;
       $this->SetResultCacheKeys(array(
          ));
        $this->IncludeComponentTemplate();
    }
    endwhile;
        $this->AbortResultCache();
}
echo '<pre>';
print_r($navElement);
echo '</pre>';
?>
