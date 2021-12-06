<?php

namespace Shopify\Enum\Fields;

class LocationFields extends AbstractObjectEnum
{
    const ID = 'id';
    const NAME = 'name';
    const ADDRESS1 = 'address1';
    const ADDRESS2 = 'address2';
    const CITY = 'city';
    const ZIP = 'zip';
    const PROVINCE = 'province';
    const PROVINCE_CODE = 'province_code';
    const COUNTRY = 'country';
    const COUNTRY_CODE = 'country_code';
    const PHONE = 'phone';
    const LEGACY = 'legacy';
    const ACTIVE = 'active';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function getFieldTypes()
    {
        return [
            'id' => 'integer',
            'name' => 'string',
            'address1' => 'string',
            'address2' => 'string',
            'zip' => 'string',
            'city' => 'string',
            'province' => 'string',
            'province_code' => 'string',
            'country' => 'string',
            'country_code' => 'string',
            'phone' => 'string',
            'legacy' => 'boolean',
            'active' => 'boolean',
            'created_at' => 'DateTime',
            'updated_at' => 'DateTime'
        ];
    }
}
