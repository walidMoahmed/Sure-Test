<?php

namespace App\Couriers\CourierNumberTwo;

interface CourierNumberTwoInterface {
    public function createShipmentInfo($shipmentData);
    public function createShipmentInstructions($shipmentData);
    public function getShipmentWaybill($shipmentData);
    public function getShipmentTrackingDetails($trackingNumber);
}
