<?php

namespace Shopify\Enum\Fields;

class ProductImageFields extends AbstractObjectEnum
{
    const ATTACHMENT = 'attachment';
    const CREATED_AT = 'created_at';
    const ID = 'id';
    const POSITION = 'position';
    const PRODUCT_ID = 'product_id';
    const VARIANT_IDS = 'variant_ids';
    const SRC = 'src';
    const ALT = 'alt';
    const WIDTH = 'width';
    const HEIGHT = 'height';
    const UPDATED_AT = 'updated_at';

    public function getFieldTypes()
    {
	return array(
            'attachment' => 'string',
            'created_at' => 'DateTime',
            'id' => 'integer',
            'position' => 'integer',
            'product_id' => 'integer',
            'variant_ids' => 'array',
            'src' => 'string',
            'alt' => 'string',
            'height' => 'integer',
            'width' => 'integer',
            'updated_at' => 'DateTime'
        );
    }
}
