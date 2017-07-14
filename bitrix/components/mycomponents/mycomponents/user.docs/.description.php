<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_IBLOCK_DESC_USER_DOCS_LIST"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_USER_DOCS_DESC"),
	"ICON" => "",
	"CACHE_PATH" => "Y",
	"SORT" => 40,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "output_infoblock_data",
			"NAME" => GetMessage("T_IBLOCK_DESC_USER_DOCS"),
			"SORT" => 20,
		)
	),
);

?>