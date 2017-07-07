<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth.form", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"REGISTER_URL" => "/polzovatel/registration.php",	// Страница регистрации
		"FORGOT_PASSWORD_URL" => "/polzovatel/",	// Страница забытого пароля
		"PROFILE_URL" => "/polzovatel/profil.php",	// Страница профиля
		"SHOW_ERRORS" => "Y",	// Показывать ошибки
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>