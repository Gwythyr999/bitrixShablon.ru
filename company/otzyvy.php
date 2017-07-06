<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Отзывы");
$APPLICATION->SetPageProperty("keywords", "отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>
    <p>Загаловок - <? $APPLICATION->ShowTitle()?></p>
    <p>test - <? $APPLICATION->ShowProperty("test")?></p>
    <p>title - <? $APPLICATION->ShowProperty("title")?></p>
    <p>keywords- <? $APPLICATION->ShowProperty("keywords")?></p>
    <p>description - <? $APPLICATION->ShowProperty("description")?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>