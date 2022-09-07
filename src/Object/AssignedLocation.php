<?php
/**
 * Shopify\Object\AssignedLocation
 */

namespace Shopify\Object;

use Shopify\Enum\Fields\AssignedLocationFields;

class AssignedLocation extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return AssignedLocationFields::getInstance();
    }
}
