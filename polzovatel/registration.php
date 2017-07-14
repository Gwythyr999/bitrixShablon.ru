<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?
if(!$USER->IsAuthorized()) {
    ?>
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.register",
        "",
        Array(
            "AUTH" => "Y",
            "REQUIRED_FIELDS" => array("EMAIL", "NAME", "LAST_NAME", "PERSONAL_PHONE"),
            "SET_TITLE" => "N",
            "SHOW_FIELDS" => array("EMAIL", "NAME", "PERSONAL_PHONE", "LAST_NAME"),
            "SUCCESS_PAGE" => "",
            "USER_PROPERTY" => array(),
            "USER_PROPERTY_NAME" => "",
            "USE_BACKURL" => "Y"
        )
    );
}elseif(!empty( $_REQUEST["backurl"] )) {LocalRedirect( $_REQUEST["backurl"] );} else { LocalRedirect(SITE_DIR.'/');}?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>