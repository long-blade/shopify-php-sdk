<?php

namespace Shopify\Enum\Fields;

class DiscountAllocationFields extends AbstractObjectEnum
{
    const AMOUNT = 'amount';
    const DISCOUNT_APPLICATION_INDEX = 'price';

    public function getFieldTypes()
    {
        return [
            'amount' => 'string',
            'discount_application_index' => 'string',
        ];
    }
}
