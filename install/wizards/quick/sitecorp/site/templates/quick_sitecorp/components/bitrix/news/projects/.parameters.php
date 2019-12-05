<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?
/**
 * Copyright (c) 5/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$arTemplateParameters = array(
    "QUICK_IBLOCK_ID_ORDER" => array(
        "PARENT" => "DETAIL_SETTINGS",
        "NAME" => GetMessage("QUICK_IBLOCK_ID_ORDER"),
        "TYPE" => "STRING",
        "DEFAULT" => "",
    ),
    "QUICK_IBLOCK_ID_REVIEWS" => array(
        "PARENT" => "DETAIL_SETTINGS",
        "NAME" => GetMessage("QUICK_IBLOCK_ID_REVIEWS"),
        "TYPE" => "STRING",
        "DEFAULT" => "",
    ),
    "QUICK_IBLOCK_ID_SERVICES" => array(
        "PARENT" => "DETAIL_SETTINGS",
        "NAME" => GetMessage("QUICK_IBLOCK_ID_SERVICES"),
        "TYPE" => "STRING",
        "DEFAULT" => "",
    ),
    "QUICK_ALLOW_REVIEWS" => array(
        "PARENT" => "DETAIL_SETTINGS",
        "NAME" => GetMessage("QUICK_ALLOW_REVIEWS"),
        "TYPE" => "LIST",
        "VALUES" => array("Y" => GetMessage('QUICK_ALLOW_REVIEWS_Y'), "N" => GetMessage('QUICK_ALLOW_REVIEWS_N')),
        "DEFAULT" => "Y",
    ),
    "QUICK_PROJECTS_EMAIL" => array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("QUICK_PROJECTS_EMAIL"),
        "TYPE" => "STRING",
        "DEFAULT" => "",
    ),
);
?>