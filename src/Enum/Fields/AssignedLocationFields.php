<?php

namespace Shopify\Enum\Fields;

class AssignedLocationFields extends AbstractObjectEnum
{
    public const LOCATION_ID = 'location_id'; // ✅
    public const NAME = 'name'; // ✅
    public const ADDRESS1 = 'address1'; // ✅
    public const ADDRESS2 = 'address2'; // ✅
    public const CITY = 'city'; // ✅
    public const ZIP = 'zip'; // ✅
    public const PROVINCE = 'province'; // ✅
    public const COUNTRY_CODE = 'country_code'; // ✅
    public const PHONE = 'phone'; // ✅

    public function getFieldTypes()
    {
        return [
            'location_id' => 'integer',
            'name' => 'string',
            'address1' => 'string',
            'address2' => 'string',
            'city' => 'string',
            'zip' => 'string',
            'province' => 'string',
            'country_code' => 'string',
            'phone' => 'string'
        ];
    }
}
