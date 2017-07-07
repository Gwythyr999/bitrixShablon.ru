<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <?$APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/template_style.css')?>
    <link rel="shortcut icon" type="image" href="/bitrix/templates/.default/favicon.ico" />
    <?
    $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-1.8.2.min.js');
    $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/slides.min.jquery.js');
    $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js');
    $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/functions.js');
    ?>
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <?include_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/.default/include/header.php")?>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumb", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "breadcrumb"
	),
	false
);?>

    <!--- // end header area --->

    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?$APPLICATION->ShowTitle('title')?></p>
                    </div>