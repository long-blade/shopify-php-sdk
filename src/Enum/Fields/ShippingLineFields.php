<?php

namespace Shopify\Enum\Fields;

class ShippingLineFields extends AbstractObjectEnum
{
    const ID = 'id';
    const CODE = 'code';
    const PRICE = 'price';
    const SOURCE = 'source';
    const TITLE = 'title';
    const TAX_LINES = 'tax_lines';
    const CARRIER_IDENTIFIER = 'carrier_identifier';
    const DELIVERY_CATEGORY = 'delivery_category';
    const REQUESTED_FULFILLMENT_SERVICE_ID = 'requested_fulfillment_service_id';
    const DISCOUNT_ALLOCATIONS = 'discount_allocations';

    public function getFieldTypes()
    {
        return [
            'id' => 'integer',
            'code' => 'string',
            'price' => 'string',
            'source' => 'string',
            'title' => 'string',
            'tax_lines' => 'TaxLine[]',
            'carrier_identifer' => 'string',
            'delivery_category' => 'string',
            'discounted_price' => 'string',
            'requested_fulfillment_service_id' => 'string',
            'discount_allocations' => 'DiscountAllocation[]',
        ];
    }
}
