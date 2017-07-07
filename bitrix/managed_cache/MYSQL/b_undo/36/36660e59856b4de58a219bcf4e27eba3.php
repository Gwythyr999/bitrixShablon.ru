<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001499401436';
$dateexpire = '001499574236';
$ser_content = 'a:2:{s:7:"CONTENT";s:0:"";s:4:"VARS";a:1:{s:33:"2626d7e0cdf8149727733573e074669bf";a:1:{i:1;a:7:{s:2:"ID";s:33:"2626d7e0cdf8149727733573e074669bf";s:9:"MODULE_ID";s:4:"main";s:9:"UNDO_TYPE";s:8:"autosave";s:12:"UNDO_HANDLER";s:19:"CAutoSave::_Restore";s:7:"CONTENT";s:2270:"a:23:{s:4:"site";s:2:"s1";s:4:"path";s:72:"/bitrix/templates/.default/components/bitrix/menu/top_multi/template.php";s:7:"logical";s:0:"";s:5:"saveb";s:0:"";s:4:"save";s:0:"";s:10:"fullscreen";s:1:"N";s:8:"template";s:0:"";s:8:"back_url";s:0:"";s:5:"title";s:0:"";s:3:"new";s:1:"n";s:8:"filename";s:12:"template.php";s:6:"ofp_id";s:0:"";s:7:"filesrc";s:1672:"<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?if (!empty($arResult)):?>
<div class="nv_topnav">
	<ul>
		 <?
$previousLevel = 0;
foreach($arResult as $arItem):?> <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?> <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?> <?endif?> <?if ($arItem["IS_PARENT"]):?> <?if ($arItem["DEPTH_LEVEL"] == 1):?>
		<li><a href="&lt;?=$arItem[">" data-bx-app-ex-href="<?=$arItem["LINK"]?>
		" <?if(isset($arItem[\'PARAMS\'][\'IMG\'])):?>class="menu-img-fon" style="background-image: url()" data-bx-app-ex-style="background-image: url(<?=$arItem[\'PARAMS\'][\'IMG\']?>
		)"<?endif?> &gt;<?=$arItem["TEXT"]?></a>
		<ul>
			 <?else:?>
			<li><a href="&lt;?=$arItem[">" data-bx-app-ex-href="<?=$arItem["LINK"]?>
			"&gt;<?=$arItem["TEXT"]?></a>
			<ul>
				 <?endif?> <?else:?> <?if ($arItem["PERMISSION"] > "D"):?> <?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="&lt;?=$arItem[">" data-bx-app-ex-href="<?=$arItem["LINK"]?>
				" <?if(isset($arItem[\'PARAMS\'][\'IMG\'])):?>class="menu-img-fon" style="background-image: url()" data-bx-app-ex-style="background-image: url(<?=$arItem[\'PARAMS\'][\'IMG\']?>
				)"<?endif?> &gt;<?=$arItem["TEXT"]?></a></li>
				 <?else:?>
				<li><a href="&lt;?=$arItem[">" data-bx-app-ex-href="<?=$arItem["LINK"]?>
				"&gt;<?=$arItem["TEXT"]?></a></li>
				 <?endif?> <?endif?> <?endif?> <?$previousLevel = $arItem["DEPTH_LEVEL"];?> <?endforeach?> <?if ($previousLevel > 1)://close last item tags?> <?=str_repeat("</ul></li>", ($previousLevel-1) );?> <?endif?>
				<div class="clearboth">
				</div>
			</ul>
 </li>
		</ul>
		</li>
	</ul>
</div>
<?endif?>";s:11:"add_to_menu";s:0:"";s:8:"menutype";s:4:"left";s:8:"itemtype";s:0:"";s:4:"newp";s:0:"";s:7:"newppos";s:1:"0";s:8:"menuitem";s:0:"";s:6:"apply2";s:0:"";s:5:"apply";s:0:"";s:6:"cancel";s:0:"";s:21:"tabControl_active_tab";s:5:"edit1";}";s:7:"USER_ID";s:1:"1";s:11:"TIMESTAMP_X";s:10:"1499396224";}}}}';
return true;
?>