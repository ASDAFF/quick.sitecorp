<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?
/**
 * Copyright (c) 5/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

/*
use Bitrix\Main\Loader;
//use Bitrix\Main\ModuleManager;

if (!Loader::includeModule('iblock'))
    return;
Loader::includeModule('catalog');

$arOffers = CIBlockPriceTools::GetOffersIBlock($arCurrentValues["IBLOCK_ID"]);
$OFFERS_IBLOCK_ID = is_array($arOffers) ? $arOffers["OFFERS_IBLOCK_ID"] : 0;
$arProperty_Offers = array();
$arProperty_OffersWithoutFile = array();
if ($OFFERS_IBLOCK_ID) {
    $rsProp = CIBlockProperty::GetList(array("sort" => "asc", "name" => "asc"), array("IBLOCK_ID" => $OFFERS_IBLOCK_ID, "ACTIVE" => "Y"));
    while ($arr = $rsProp->Fetch()) {
        $arr['ID'] = intval($arr['ID']);
        if ($arOffers['OFFERS_PROPERTY_ID'] == $arr['ID'])
            continue;
        $strPropName = '[' . $arr['ID'] . ']' . ('' != $arr['CODE'] ? '[' . $arr['CODE'] . ']' : '') . ' ' . $arr['NAME'];
        if ('' == $arr['CODE'])
            $arr['CODE'] = $arr['ID'];
        $arProperty_Offers[$arr["CODE"]] = $strPropName;
        if ('F' != $arr['PROPERTY_TYPE'])
            $arProperty_OffersWithoutFile[$arr["CODE"]] = $strPropName;
    }
}
*/

$arTemplateParameters = array(
        /*
    'QUICK_DISPLAY_OFFERS_PROPERTIES' => array(
        'NAME' => GetMessage('QUICK_DISPLAY_OFFERS_PROPERTIES'),
        'TYPE' => 'LIST',
        'VALUES' => $arProperty_Offers,
        'MULTIPLE' => 'Y',
        'ADDITIONAL_VALUES' => 'N',
        'REFRESH' => 'N',
        'DEFAULT' => '-',
    ),
    'QUICK_SWITCH_SKU' => array(
        'NAME' => GetMessage('QUICK_SWITCH_SKU'),
        'TYPE' => 'LIST',
        'VALUES' => array('checkbox' => 'checkbox', 'select' => 'select'),
        'MULTIPLE' => 'N',
        'DEFAULT' => 'checkbox',
    ),
    'QUICK_SWITCH_COLOR_SKU' => array(
        'NAME' => GetMessage('QUICK_SWITCH_COLOR_SKU'),
        'TYPE' => 'LIST',
        'VALUES' => array('color_css' => GetMessage('QUICK_SWITCH_COLOR_SKU_CSS'), 'color_reference' => GetMessage('QUICK_SWITCH_COLOR_SKU_REF'), 'color_img' => GetMessage('QUICK_SWITCH_COLOR_SKU_PIC')),
        'MULTIPLE' => 'N',
        'DEFAULT' => 'checkbox',
    ),
    'QUICK_OFFERS_PROPERTIES_COLOR' => array(
        'NAME' => GetMessage('QUICK_OFFERS_PROPERTIES_COLOR'),
        'TYPE' => 'STRING',
        'VALUES' => 'COLOR_REF',
    ),
    'QUICK_USE_COMPARE' => array(
        'NAME' => GetMessage('QUICK_USE_COMPARE'),
        'TYPE' => 'CHECKBOX',
        'VALUES' => 'Y',
    ),
    'QUICK_USE_DELAY' => array(
        'NAME' => GetMessage('QUICK_USE_DELAY'),
        'TYPE' => 'CHECKBOX',
        'VALUES' => 'Y',
    ),
    'QUICK_USE_PREVIEW_TEXT_IN_SECTION' => array(
        'NAME' => GetMessage('QUICK_USE_PREVIEW_TEXT_IN_SECTION'),
        'TYPE' => 'CHECKBOX',
        'VALUES' => 'Y',
    ),
    'QUICK_USE_QUICK_VIEW' => array(
        'NAME' => GetMessage('QUICK_USE_QUICK_VIEW'),
        'TYPE' => 'CHECKBOX',
        'VALUES' => 'Y',
    ),
    'QUICK_CATALOG_PAGE' => array(
        'NAME' => GetMessage('QUICK_CATALOG_PAGE'),
        'TYPE' => 'STRING',
        'VALUES' => 'SECTION',
    ),
*/

    "QUICK_IBLOCK_ID_ORDER" => Array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("QUICK_IBLOCK_ID_ORDER"),
        "TYPE" => "STRING",
    ),
    "QUICK_IBLOCK_ID_QUESTIONS" => Array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("QUICK_IBLOCK_ID_QUESTIONS"),
        "TYPE" => "STRING",
    ),
    "QUICK_ALLOW_REVIEWS" => Array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("QUICK_ALLOW_REVIEWS"),
        "TYPE" => "CHECKBOX",
    ),
    "QUICK_IBLOCK_ID_REVIEWS" => Array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("QUICK_IBLOCK_ID_REVIEWS"),
        "TYPE" => "STRING",
    ),
);
?>