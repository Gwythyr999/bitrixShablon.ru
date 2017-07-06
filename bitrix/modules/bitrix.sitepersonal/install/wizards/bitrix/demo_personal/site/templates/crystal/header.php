<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/bitrix/templates/.default/favicon.ico" />
<?$APPLICATION->ShowMeta("robots")?>
<?$APPLICATION->ShowMeta("keywords")?>
<?$APPLICATION->ShowMeta("description")?>
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead();?>
<?IncludeTemplateLangFile(__FILE__);?>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/print.css" media="print" />
</head>
<body>	
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		
		<div id="page-wrapper">
			<div id="page-gradient">
				<div id="page">
					
						<div id="star"></div>			
						<div id="header-corners"></div>

						<div id="header">
								<h1 id="site-name"><?$APPLICATION->IncludeFile(
									SITE_TEMPLATE_PATH."/include_areas/site_name.php",
									Array(),
									Array("MODE"=>"html")
								);?></h1>
								<?if($APPLICATION->GetCurPage(true) == SITE_DIR."index.php"):?>
								<a href="<?=SITE_DIR?>rss/" id="rss-link"><?=GetMessage("TMPL_RSS")?></a>
								<?endif?>
							</div>
							
						<div id="top-menu">
								<div id="top-menu-left-indent"></div>
								<div id="top-menu-right-indent"></div>
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"personal_tab", 
									Array(
										"ROOT_MENU_TYPE"	=>	"top",
										"MAX_LEVEL"	=>	"1",
										"USE_EXT"	=>	"N"
									)
								);?>
								<?$APPLICATION->IncludeComponent("bitrix:search.form", "personal", Array(
											"PAGE"	=>	SITE_DIR."search.php"
											)
									);?>
							</div>
							
						<div id="content">
							<div id="work-area">
							<?if($APPLICATION->GetCurPage(true) != SITE_DIR."index.php")
							{
								echo "<h1>";
								$APPLICATION->ShowTitle(false);
								echo "</h1>";
							}
							?>	