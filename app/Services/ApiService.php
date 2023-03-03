<?php

namespace App\Services;

use App\Services\Api\ApiInterface;
use App\Services\Api\Flickr;
use App\Services\Api\Google;

class ApiService
{
    public function __construct(private ApiInterface $api, private GeolocationService $service)
    {
    }

    public function callApi(): string
    {
        switch ($this->service->getLocation())
        {
            case 'Flickr':
                $this->api = app(Flickr::class);
                break;
            default:
                $this->api = app(Google::class);
                break;
        }

        return $this->api->request();
    }
}
