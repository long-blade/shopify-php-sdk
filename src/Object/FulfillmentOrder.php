<?php

namespace Shopify\Object;

use InvalidArgumentException;
use Shopify\Enum\Fields\FulfillmentOrderFields;
use Shopify\Enum\FulfillmentHoldReason;

class FulfillmentOrder extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return FulfillmentOrderFields::getInstance();
    }

    public static function isValidHoldReason($reason)
    {
        if (!in_array($reason, [
            FulfillmentHoldReason::AWAITING_PAYMENT,
            FulfillmentHoldReason::HIGH_RISK_OF_FRAUD,
            FulfillmentHoldReason::INCORRECT_ADDRESS,
            FulfillmentHoldReason::INVENTORY_OUT_OF_STOCK,
            FulfillmentHoldReason::OTHER,
        ])) {
            throw new InvalidArgumentException('Invalid fulfillment hold reason provided.');
        }

        return $reason;
    }
}
