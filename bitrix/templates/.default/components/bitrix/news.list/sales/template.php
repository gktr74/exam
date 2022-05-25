<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="sb_action">
<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/></a>
<h4><?echo $arItem["NAME"]?></h4>
<h5><a href=""><?echo $arItem["PREVIEW_TEXT"];?></a></h5>
<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="sb_action_more">Подробнее &rarr;</a>
  </div>
<?endforeach;?>
