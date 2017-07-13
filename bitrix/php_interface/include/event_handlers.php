<?
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("CIBLockHandler", "OnBeforeIBlockElementUpdateHandler"));
class CIBLockHandler
{
    // создаем обработчик события "OnBeforeIBlockElementUpdate"
    function OnBeforeIBlockElementUpdateHandler(&$arFields)
    {
        if($arFields['IBLOCK_ID'] == IBLOCK_CAT_ID) {
            $db_props = CIBlockElement::GetProperty($arFields['IBLOCK_ID'], $arFields['ID'], array("sort" => "asc"), Array("CODE" => "PRICE"));
            if ($ar_props = $db_props->Fetch()) {
                $arFields['PROPERTY_VALUES'][$ar_props["ID"]][$ar_props["PROPERTY_VALUE_ID"]]['VALUE'] =
                    preg_replace("/[^\d]/","",  $arFields['PROPERTY_VALUES'][$ar_props["ID"]][$ar_props["PROPERTY_VALUE_ID"]]['VALUE']);
            }

        }
    }
}
AddEventHandler("main", "OnBeforeEventAdd", Array("CMainHandler", "OnBeforeEventAddHandler"));
AddEventHandler("main", "OnBeforeUserAdd", Array("CMainHandler", "OnBeforeUserAddHandler"));
class CMainHandler
{
    function OnBeforeEventAddHandler(&$event,&$lid,&$arFields)
        {
            if($event == "FEEDBACK_FORM"){
                if(CMOdule::IncludeModule("iblock")){
                    $el = new CIBlockElement;

                    $arLoadProductArray = array(
                      "IBLOCK_ID" => IBLOCK_FEEDBACK_ID,
                        "NAME" => $arFields["AUTHOR"],
                        "DETAIL_TEXT" => $arFields["TEXT"],
                        "DATE_ACTIVE_FROM" => ConvertTimeStamp(false,"FULL"),
                    );
                    $el->Add($arLoadProductArray);
                }
            }


        }
    function OnBeforeUserAddHandler(&$arFields)
    {
        if($arFields["LAST_NAME"] == $arFields["NAME"])
        {
            global $APPLICATION;
            $APPLICATION->throwException("Имя и фамилия не могут быть одинковыми");
            return false;
        }
    }

}
?>