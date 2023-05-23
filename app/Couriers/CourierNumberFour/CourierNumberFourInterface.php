<?php

namespace App\Couriers\CourierNumberFour;

interface CourierNumberFourInterface {
    public function createShipment($shipmentData);
    public function trackShipment($trackingNumber);
}
