<?
/**
 * Copyright (c) 5/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$site_id = strtoupper(WIZARD_SITE_ID);

$rsSites = CSite::GetByID(WIZARD_SITE_ID);
$arSite = $rsSites->Fetch();

$MESS["QUICK_CATALOG_" . $site_id . "_TYPE_NAME"] = "Товары сайта " . WIZARD_SITE_ID/* . " (" . $arSite['SITE_NAME'] . ")"*/;
$MESS["QUICK_CATALOG_ELEMENT_NAME"] = "Товары";
$MESS["QUICK_CATALOG_SECTION_NAME"] = "Категории";

$MESS["QUICK_OBJECTS_" . $site_id . "_TYPE_NAME"] = "Объекты сайта " . WIZARD_SITE_ID/* . " (" . $arSite['SITE_NAME'] . ")"*/;
$MESS["QUICK_OBJECTS_ELEMENT_NAME"] = "Элементы";
$MESS["QUICK_OBJECTS_SECTION_NAME"] = "Разделы";

$MESS["QUICK_FORMS_" . $site_id . "_TYPE_NAME"] = "Формы для сайта " . WIZARD_SITE_ID/* . " (" . $arSite['SITE_NAME'] . ")"*/;
$MESS["QUICK_FORMS_ELEMENT_NAME"] = "Элементы";
$MESS["QUICK_FORMS_SECTION_NAME"] = "Разделы";

$MESS["REFERENCES_TYPE_NAME"] = "Справочники";
$MESS["REFERENCES_ELEMENT_NAME"] = "Справочник";
$MESS["REFERENCES_SECTION_NAME"] = "Справочник";
?>