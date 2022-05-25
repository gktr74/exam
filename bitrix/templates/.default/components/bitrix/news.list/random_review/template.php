<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="sb_reviewed">
    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="sb_rw_avatar" alt=""/>
    <?endif;?>
    <span class="sb_rw_name"><?echo $arItem["NAME"]?></span>
    <span class="sb_rw_job"><?=$arItem["PROPERTIES"]["FUNCTION"]["VALUE"]." ".$arItem["PROPERTIES"]["NAME_COMPANY"]["VALUE"]?></span>
    <p><?=$arItem["DETAIL_TEXT"]?></p>
    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>
<?endforeach;?>
