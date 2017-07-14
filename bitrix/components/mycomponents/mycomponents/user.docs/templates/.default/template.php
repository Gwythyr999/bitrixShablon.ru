<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
echo '<pre>';
print_r($navElement);
echo '</pre>';
?>

<?foreach ($navElement as $value):?>
<div class="photo-random">
    <?=$arResult["NAME"]?>
    <div class="clearboth"></div>
</div>
<?endforeach;?>
