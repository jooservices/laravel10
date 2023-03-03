<?php

namespace App\Services\Geolocation;

interface GeolocationInterface
{
    public function getLocation(): string;
}
