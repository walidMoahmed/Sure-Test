<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Couriers\CourierNumberOne\CourierNumberOneInterface;
use App\Couriers\CourierNumberOne\CourierNumberOne;
use App\Couriers\CourierNumberTwo\CourierNumberTwoInterface;
use App\Couriers\CourierNumberTwo\CourierNumberTwo;
use App\Couriers\CourierNumberThree\CourierNumberThreeInterface;
use App\Couriers\CourierNumberThree\CourierNumberThree;
use App\Couriers\CourierNumberFour\CourierNumberFourInterface;
use App\Couriers\CourierNumberFour\CourierNumberFour;

class CourierServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CourierNumberOneInterface::class, CourierNumberOne::class);
        $this->app->bind(CourierNumberTwoInterface::class, CourierNumberTwo::class);
        $this->app->bind(CourierNumberThreeInterface::class, CourierNumberThree::class);
        $this->app->bind(CourierNumberFourInterface::class, CourierNumberFour::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
