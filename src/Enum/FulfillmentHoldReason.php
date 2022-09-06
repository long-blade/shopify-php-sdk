<?php

namespace Shopify\Enum;

class FulfillmentHoldReason
{
    public const AWAITING_PAYMENT = 'awaiting_payment';
    public const HIGH_RISK_OF_FRAUD = 'high_risk_of_fraud';
    public const INCORRECT_ADDRESS = 'incorrect_address';
    public const INVENTORY_OUT_OF_STOCK = 'inventory_out_of_stock';
    public const OTHER = 'other';
}
