<?php

namespace App\Services\Geolocation;

class Ipstack implements GeolocationInterface
{
    public function getLocation(): string
    {
        return 'https://api.ipstack.com/134.201.250.155? access_key = YOUR_ACCESS_KEY';
    }
}

