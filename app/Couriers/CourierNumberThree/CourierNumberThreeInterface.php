<?php

namespace App\Couriers\CourierNumberThree;

interface CourierNumberThreeInterface {
    public function createShipmentAndGetWaybill($shipmentData);
    public function registerNumber($numberData);
    public function getTrackingDetails($trackingNumber);
}
