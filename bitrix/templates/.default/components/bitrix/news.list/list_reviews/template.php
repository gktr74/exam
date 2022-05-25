<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="review-block">
    <div class="review-text">
                <div class="review-block-title">
            <span class="review-block-name"><a href="#"><?echo $arItem["NAME"]?></a></span>
            <span class="review-block-description"><?=$arItem["PROPERTIES"]["FUNCTION"]["VALUE"]." ".$arItem["PROPERTIES"]["NAME_COMPANY"]["VALUE"]?></span></div>
        <div class="review-text-cont">
            <?=$arItem["DETAIL_TEXT"]?>
        </div>
    </div>
    <div class="review-img-wrap"><a href="#"><?if (is_array($arItem["PREVIEW_PICTURE"])):?>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt=""/>
            <?endif?></a>

    </div>

</div>
<?endforeach;?>
