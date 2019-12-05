<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Copyright (c) 5/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
$arFilter = Array("TYPE_ID" => "QUICK_FORM", "ACTIVE" => "Y");
if($site !== false)
    $arFilter["LID"] = $site;

$arEvent = Array();
$dbType = CEventMessage::GetList($by="ID", $order="DESC", $arFilter);
while($arType = $dbType->GetNext())
    $arEvent[$arType["ID"]] = "[".$arType["ID"]."] ".$arType["SUBJECT"];

if (CModule::IncludeModule("iblock")){
    $arIBlocks = Array();
    $db_iblock = CIBlock::GetList(Array("SORT" => "ASC"), Array("SITE_ID" => $_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"] != "-" ? $arCurrentValues["IBLOCK_TYPE"] : "")));
    while ($arRes = $db_iblock->Fetch())
        $arIBlocks[$arRes["ID"]] = $arRes["NAME"];
}

$arComponentParameters = array(
    "PARAMETERS" => array(
        "USE_CAPTCHA" => Array(
            "NAME" => GetMessage("QUICK_FORM_USE_CAPTCHA"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "PARENT" => "BASE",
        ),
        "OK_MESSAGE" => Array(
            "NAME" => GetMessage("QUICK_FORM_OK_MESSAGE"),
            "TYPE" => "STRING",
            "PARENT" => "BASE",
        ),
        "EMAIL_TO" => Array(
            "NAME" => GetMessage("QUICK_FORM_EMAIL_TO"),
            "TYPE" => "STRING",
            "DEFAULT" => htmlspecialcharsbx(COption::GetOptionString("main", "email_from")),
            "PARENT" => "BASE",
        ),
        "REQUIRED_FIELDS" => Array(
            "NAME" => GetMessage("QUICK_FORM_REQUIRED_FIELDS"),
            "TYPE" => "LIST",
            "MULTIPLE" => "Y",
            "VALUES" => Array("NONE" => GetMessage("QUICK_FORM_ALL_OPTIONAL"), "NAME" => GetMessage("QUICK_FORM_REQUIRED_NAME"), "EMAIL" => GetMessage("QUICK_FORM_REQUIRED_EMAIL"), "PHONE" => GetMessage("QUICK_FORM_REQUIRED_PHONE"), "MESSAGE" => GetMessage("QUICK_FORM_REQUIRED_MESSAGE")),
            "DEFAULT" => "",
            "COLS" => 25,
            "PARENT" => "BASE",
        ),
        "EVENT_MESSAGE_ID" => Array(
            "NAME" => GetMessage("QUICK_FORM_EVENT_MESSAGE_ID"),
            "TYPE" => "LIST",
            "VALUES" => $arEvent,
            "MULTIPLE" => "Y",
            "COLS" => 25,
            "PARENT" => "BASE",
        ),
        "EVENT_MESSAGE_TYPE" => Array(
            "NAME" => GetMessage("QUICK_FORM_EVENT_MESSAGE_TYPE"),
            "TYPE" => "STRING",
            "DEFAULT" => "QUICK_FORM",
            "PARENT" => "BASE",
        ),
        "EVENT_MESSAGE_TYPE_USER" => Array(
            "NAME" => GetMessage("QUICK_FORM_EVENT_MESSAGE_TYPE_USER"),
            "TYPE" => "STRING",
            "DEFAULT" => "EVENT_MESSAGE_TYPE_USER",
            "PARENT" => "BASE",
        ),
        "ELEMENT_NAME" => Array(
            "NAME" => GetMessage("QUICK_FORM_ELEMENT_NAME"),
            "TYPE" => "STRING",
            "PARENT" => "BASE",
        ),
        "ELEMENT_ID" => Array(
            "NAME" => GetMessage("QUICK_FORM_ELEMENT_ID"),
            "TYPE" => "STRING",
            "PARENT" => "BASE",
        ),
		"PRICE_PRODUCT" => Array(
            "NAME" => GetMessage("QUICK_FORM_PRICE_PRODUCT"),
            "TYPE" => "STRING",
            "PARENT" => "BASE",
        ),		
        "IBLOCK_ID_ORDER" => Array(
            "NAME" => GetMessage("QUICK_FORM_IBLOCK_ID_ORDER"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlocks,
            "DEFAULT" => '',
            "ADDITIONAL_VALUES" => "Y",
            "REFRESH" => "Y",
        ),
        "AJAX_MODE" => array(),
    )
);
?>