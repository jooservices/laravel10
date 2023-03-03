<?php

namespace App\Services;

use App\Services\Geolocation\GeolocationInterface;
use App\Services\Geolocation\Ipstack;

class GeolocationService
{
    public function __construct(private GeolocationInterface $geolocation)
    {
    }

    public function getLocation(string $geolocationService = 'ipstack'): string
    {
        if ($geolocationService === 'ipstack' || $geolocationService === null) {
            $this->geolocation = app(Ipstack::class);
        }

        return $this->geolocation->getLocation();
    }
}
