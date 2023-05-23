<?php

namespace App\Couriers\CourierNumberOne;

interface CourierNumberOneInterface
{
    public function createShipmentAndGetWaybill(array $shipmentData);

    public function getShipmentTrackingDetails(string $trackingNumber);
}
