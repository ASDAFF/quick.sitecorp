<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Copyright (c) 5/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!CModule::IncludeModule("highloadblock"))
    return;

use Bitrix\Highloadblock as HL;

$dbHblock = HL\HighloadBlockTable::getList(
    array(
        "filter" => array("NAME" => "QUICKColorReference")
    )
);

if (!$dbHblock->Fetch()) {
    $data = array(
        'NAME' => 'QUICKColorReference',
        'TABLE_NAME' => 'quick_color_reference',
    );

    $result = HL\HighloadBlockTable::add($data);
    $ID = $result->getId();

    $_SESSION["QUICK_HBLOCK_COLOR_ID"] = $ID;

    $hldata = HL\HighloadBlockTable::getById($ID)->fetch();
    $hlentity = HL\HighloadBlockTable::compileEntity($hldata);

    //adding user fields
    $arUserFields = array(
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_NAME',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_COLOR_NAME',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_FILE',
            'USER_TYPE_ID' => 'file',
            'XML_ID' => 'UF_COLOR_FILE',
            'SORT' => '200',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_LINK',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_COLOR_LINK',
            'SORT' => '300',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_SORT',
            'USER_TYPE_ID' => 'double',
            'XML_ID' => 'UF_COLOR_SORT',
            'SORT' => '400',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_DEF',
            'USER_TYPE_ID' => 'boolean',
            'XML_ID' => 'UF_COLOR_DEF',
            'SORT' => '500',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_XML_ID',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_XML_ID',
            'SORT' => '600',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'Y',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
        )
    );

    $arLanguages = Array();
    $rsLanguage = CLanguage::GetList($by, $order, array());
    while ($arLanguage = $rsLanguage->Fetch())
        $arLanguages[] = $arLanguage["LID"];

    $obUserField = new CUserTypeEntity;
    foreach ($arUserFields as $arFields) {
        $dbRes = CUserTypeEntity::GetList(Array(), Array("ENTITY_ID" => $arFields["ENTITY_ID"], "FIELD_NAME" => $arFields["FIELD_NAME"]));
        if ($dbRes->Fetch())
            continue;

        $arLabelNames = Array();
        foreach ($arLanguages as $languageID) {
            WizardServices::IncludeServiceLang("references.php", $languageID);
            $arLabelNames[$languageID] = GetMessage($arFields["FIELD_NAME"]);
        }

        $arFields["EDIT_FORM_LABEL"] = $arLabelNames;
        $arFields["LIST_COLUMN_LABEL"] = $arLabelNames;
        $arFields["LIST_FILTER_LABEL"] = $arLabelNames;

        $ID_USER_FIELD = $obUserField->Add($arFields);
    }
} else {
    $HLData = \Bitrix\Highloadblock\HighloadBlockTable::getList(array('filter' => array('TABLE_NAME' => 'quick_color_reference')));
    if ($HLBlock = $HLData->fetch()) {
        $ID = $HLBlock['ID'];
    }
}

$bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . WIZARD_TEMPLATE_ID . "_" . WIZARD_THEME_ID . "_" . WIZARD_SITE_ID;

CWizardUtil::ReplaceMacros($bitrixTemplateDir . "/header.php", Array("QUICK_REFERENCE_IBLOCK_ID_COLOR" => $ID));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH . "/catalog/index.php", array("QUICK_REFERENCE_IBLOCK_ID_COLOR" => $ID));


$dbHblock = HL\HighloadBlockTable::getList(
    array(
        "filter" => array("NAME" => "SizeReference")
    )
);

if (!$dbHblock->Fetch()) {
    $data = array(
        'NAME' => 'SizeReference',
        'TABLE_NAME' => 'quick_size_reference',
    );

    $result = HL\HighloadBlockTable::add($data);
    $ID = $result->getId();

    $_SESSION["QUICK_HBLOCK_SIZE_ID"] = $ID;

    $hldata = HL\HighloadBlockTable::getById($ID)->fetch();
    $hlentity = HL\HighloadBlockTable::compileEntity($hldata);

    //adding user fields
    $arUserFields = array(
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_NAME',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_SIZE_NAME',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_VALUE',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_SIZE_VALUE',
            'SORT' => '200',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_DESCRIPTION',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_SIZE_DESCR',
            'SORT' => '400',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_FULL_DESCRIPTION',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_SIZE_FULL_DESCR',
            'SORT' => '500',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_SORT',
            'USER_TYPE_ID' => 'double',
            'XML_ID' => 'UF_SIZE_SORT',
            'SORT' => '600',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
        ),
        array(
            'ENTITY_ID' => 'HLBLOCK_' . $ID,
            'FIELD_NAME' => 'UF_XML_ID',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_XML_ID',
            'SORT' => '800',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'Y',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
        )
    );

    $arLanguages = Array();
    $rsLanguage = CLanguage::GetList($by, $order, array());
    while ($arLanguage = $rsLanguage->Fetch())
        $arLanguages[] = $arLanguage["LID"];

    $obUserField = new CUserTypeEntity;
    foreach ($arUserFields as $arFields) {
        $dbRes = CUserTypeEntity::GetList(Array(), Array("ENTITY_ID" => $arFields["ENTITY_ID"], "FIELD_NAME" => $arFields["FIELD_NAME"]));
        if ($dbRes->Fetch())
            continue;

        $arLabelNames = Array();
        foreach ($arLanguages as $languageID) {
            WizardServices::IncludeServiceLang("references.php", $languageID);
            $arLabelNames[$languageID] = GetMessage($arFields["FIELD_NAME"]);
        }

        $arFields["EDIT_FORM_LABEL"] = $arLabelNames;
        $arFields["LIST_COLUMN_LABEL"] = $arLabelNames;
        $arFields["LIST_FILTER_LABEL"] = $arLabelNames;

        $ID_USER_FIELD = $obUserField->Add($arFields);
    }
}
?>