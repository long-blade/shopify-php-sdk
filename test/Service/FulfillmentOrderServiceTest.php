<?php

namespace Shopify\Test\Service;

use Shopify\Object\FulfillmentOrder;
use Shopify\Service\FulfillmentOrderService;
use Shopify\Test\TestCase;

class FulfillmentOrderServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/FulfillmentOrderList.json');
        $service = new FulfillmentOrderService($api);
        $events = $service->all(1);
        $this->assertContainsOnlyInstancesOf(
            FulfillmentOrder::class,
            $events
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Event.json');
        $service = new FulfillmentOrderService($api);
        $event = $service->get(1);
        $this->assertInstanceOf(FulfillmentOrder::class, $event);
    }
}
