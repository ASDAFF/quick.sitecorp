<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div id="2" class="popwindow" data-title="" data-height="auto">
    <div class="popup-wrap1">
        <a class="bw_close"></a>
        <?$APPLICATION->IncludeComponent("quick:form", "services_order", array(
                "USE_CAPTCHA" => "Y",
                "EVENT_MESSAGE_ID" => array(),
                "OK_TEXT" => "",
                "EMAIL_TO" => "",
                "REQUIRED_FIELDS" => array("NAME"),
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "EVENT_MESSAGE_TYPE" => "QUICK_SERVICE_ORDER",
                "EVENT_MESSAGE_TYPE_USER" => "QUICK_SERVICE_ORDER_USER",
                "QUICK_ID_ELEMENT" => $arResult["ID"],
                "QUICK_NAME_ELEMENT" => $arResult["NAME"],
                "QUICK_IBLOCK_ID_RECORD" => $arParams['QUICK_IBLOCK_ID_ORDER'],
            ),
            false
        );?>
    </div>
</div>

<div id="5" class="popwindow" data-title="" data-height="auto">
    <div class="popup-wrap1">
        <a class="bw_close"></a>
        <?$APPLICATION->IncludeComponent("quick:form", "services_question", array(
                "USE_CAPTCHA" => "Y",
                "EVENT_MESSAGE_ID" => array(),
                "OK_TEXT" => "",
                "EMAIL_TO" => "",
                "REQUIRED_FIELDS" => array("NAME"),
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "EVENT_MESSAGE_TYPE" => "QUICK_SERVICE_QUESTIONS",
                "EVENT_MESSAGE_TYPE_USER" => "QUICK_SERVICE_QUESTIONS_USER",
                "QUICK_ID_ELEMENT" => $arResult["ID"],
                "QUICK_NAME_ELEMENT" => $arResult["NAME"],
                "QUICK_IBLOCK_ID_RECORD" => $arParams['QUICK_IBLOCK_ID_QUESTIONS'],
            ),
            false
        );?>
    </div>
</div>