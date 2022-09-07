<?php

namespace Shopify\Service;

use Shopify\Object\FulfillmentOrder;

class FulfillmentOrderService extends AbstractService
{
    // Retrieves a list of fulfillment orders for a specific order
    public function all($orderId, array $params = [])
    {
        $endpoint = 'orders/' . $orderId . '/fulfillment_orders.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createCollection(FulfillmentOrder::class, $response['fulfillment_orders']);
    }

    // Retrieves a specific fulfillment order
    public function get($fulfillmentOrderId, array $params = [])
    {
        $endpoint = '/fulfillment_orders/' . $fulfillmentOrderId . '.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createObject(FulfillmentOrder::class, $response);
    }

    // Cancel a fulfillment order
    public function cancel(FulfillmentOrder &$fulfillmentOrder)
    {
        $endpoint = '/fulfillment_orders/' . $fulfillmentOrder->id . '/cancel.json';
        $response = $this->request($endpoint, 'POST');
        $fulfillmentOrder->setData($response['fulfillment_order']);
    }

    // Marks a fulfillment order as incomplete
    public function close(FulfillmentOrder &$fulfillmentOrder, $message = "")
    {
        $endpoint = '/fulfillment_orders/' . $fulfillmentOrder->id . '/close.json';
        $response = $this->request(
            $endpoint,
            'POST',
            [
                "fulfillment_order" => [
                    "message" => $message
                ]
            ]
        );
        $fulfillmentOrder->setData($response['fulfillment_order']);
    }

    // Applies a fulfillment hold on a fulfillment order with status Open
    public function hold(FulfillmentOrder &$fulfillmentOrder, $reason, $reasonNotes = "")
    {
        FulfillmentOrder::isValidHoldReason($reason);

        $endpoint = '/fulfillment_orders/' . $fulfillmentOrder->id . '/hold.json';
        $response = $this->request(
            $endpoint,
            'POST',
            [
                "fulfillment_hold" => [
                    "reason" => $reason,
                    "reason_notes" => $reasonNotes
                ]
            ]
        );
        $fulfillmentOrder->setData($response['fulfillment_order']);
    }

    // Moves a fulfillment order to a new location
    public function move(FulfillmentOrder &$fulfillmentOrder, $newLocationId)
    {
        $endpoint = '/fulfillment_orders/' . $fulfillmentOrder->id . '/move.json';
        $response = $this->request(
            $endpoint,
            'POST',
            [
                "fulfillment_order" => [
                    "new_location_id" => $newLocationId,
                ]
            ]
        );
        $fulfillmentOrder->setData($response['fulfillment_order']);
    }

    // Marks the fulfillment order as open
    public function open(FulfillmentOrder &$fulfillmentOrder)
    {
        $endpoint = '/fulfillment_orders/' . $fulfillmentOrder->id . '/open.json';
        $response = $this->request($endpoint, 'POST');
        $fulfillmentOrder->setData($response['fulfillment_order']);
    }

    // Releases the fulfillment hold on a fulfillment order
    public function release(FulfillmentOrder &$fulfillmentOrder)
    {
        $endpoint = '/fulfillment_orders/' . $fulfillmentOrder->id . '/release_hold.json';
        $response = $this->request($endpoint, 'POST');
        $fulfillmentOrder->setData($response['fulfillment_order']);
    }

    // Reschedules the fulfill_at time of a scheduled fulfillment order
    public function reschedule(FulfillmentOrder &$fulfillmentOrder, $newDate)
    {
        $endpoint = '/fulfillment_orders/' . $fulfillmentOrder->id . '/reschedule.json';
        $response = $this->request(
            $endpoint,
            'POST',
            [
                "fulfillment_order" => [
                    "new_fulfill_at" => $newDate,
                ]
            ]
        );
        $fulfillmentOrder->setData($response['fulfillment_order']);
    }
}
