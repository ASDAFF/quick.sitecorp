<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?
/**
 * Copyright (c) 5/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if ($_REQUEST["class"] == 'true'){
    $_SESSION["QUICK_FIXED_BOTTOM_MENU"] = '';
} else {
    $_SESSION["QUICK_FIXED_BOTTOM_MENU"] = 'not-active';
}
?>