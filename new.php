<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><?$APPLICATION->IncludeComponent(
    "bitrix:system.auth.form",
    "",
    Array()
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>