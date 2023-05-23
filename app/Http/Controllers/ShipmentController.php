<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Couriers\CourierNumberOne\CourierNumberOneInterface;
use App\Couriers\CourierNumberTwo\CourierNumberTwoInterface;
use App\Couriers\CourierNumberThree\CourierNumberThreeInterface;
use App\Couriers\CourierNumberFour\CourierNumberFourInterface;

class ShipmentController extends Controller
{
    public function __construct(
        private CourierNumberOneInterface   $courierOne,
        private CourierNumberTwoInterface   $courierTwo,
        private CourierNumberThreeInterface $courierThree,
        private CourierNumberFourInterface  $courierFour
    )
    {

    }

    public function createShipment(Request $request)
    {
        $shipmentData = $request->all();
        $trackingNumber = $this->courierOne->createShipmentAndGetWaybill($shipmentData);

        return response()->json([
            'tracking_number' => $trackingNumber,
            'message' => 'Shipment created successfully',
        ]);
    }

    public function trackShipment($trackingNumber)
    {
        $trackingDetails = $this->courierOne->getShipmentTrackingDetails($trackingNumber);

        return response()->json([
            'tracking_details' => $trackingDetails,
        ]);
    }
}
