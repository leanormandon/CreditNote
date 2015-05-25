<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace CreditNote\Form;

use CreditNote\Form\Base\CreditNoteConfigForm as BaseCreditNoteConfigForm;

/**
 * Class CreditNoteConfigForm
 * @package CreditNote\Form\Base
 */
class CreditNoteConfigForm extends BaseCreditNoteConfigForm
{
    public function getTranslationKeys()
    {
        return array(
            "coupon_code_duration" => "Coupon code validity period (days)",
            "coupon_code_prefix" => "Coupon code prefix",
            "coupon_code_restricted_to_original_customer"
            => "Restrict coupon codes from order credit notes to the original customer",
        );
    }
}