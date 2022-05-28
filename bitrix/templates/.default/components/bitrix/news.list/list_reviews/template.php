<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
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
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>