<?php

namespace Shopify\Enum\Fields;

class DestinationLocationFields extends AbstractObjectEnum
{
    public const ID = 'id'; // ✅
    public const ADDRESS1 = 'address1'; // ✅
    public const ADDRESS2 = 'address2'; // ✅
    public const CITY = 'city'; // ✅
    public const COMPANY = 'company'; // ✅
    public const COUNTRY = 'country'; // ✅
    public const EMAIL = 'email';  // ✅
    public const FIRST_NAME = 'first_name'; // ✅
    public const LAST_NAME = 'last_name'; // ✅
    public const PHONE = 'phone'; // ✅
    public const PROVINCE = 'province'; // ✅
    public const ZIP = 'zip'; // ✅

    public function getFieldTypes()
    {
        return [
            'id' => 'integer',
            'address1' => 'string',
            'address2' => 'string',
            'city' => 'string',
            'company' => 'string',
            'country' => 'string',
            'email' => 'string',
            'first_name' => 'string',
            'last_name' => 'string',
            'phone' => 'string',
            'province' => 'string',
            'zip' => 'string',
        ];
    }
}
