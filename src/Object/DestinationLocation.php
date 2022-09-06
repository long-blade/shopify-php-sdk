<?php
/**
 * Shopify\Object\DestinationLocation
 */

namespace Shopify\Object;

use Shopify\Enum\Fields\DestinationLocationFields;

class DestinationLocation extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return DestinationLocationFields::getInstance();
    }
}
