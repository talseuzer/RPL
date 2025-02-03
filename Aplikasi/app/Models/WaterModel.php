<?php

namespace App\Models;

use CodeIgniter\Model;

class WaterModel extends Model
{
    private $apiKey = '64a09d5662f9b5c7b69557689384b2bf';

    public function getWeatherData($city)
    {
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$this->apiKey}";
        $client = \Config\Services::curlrequest();
        $response = $client->get($apiUrl);
        $data = json_decode($response->getBody(), true);

        if ($data['cod'] != 200) {
            return false;
        }

        return [
            'temperature' => $data['main']['temp'],
            'humidity'    => $data['main']['humidity'],
            'rain'        => isset($data['rain']['1h']) ? $data['rain']['1h'] : 0,
        ];
    }

    public function calculateWaterNeeds($plantType, $temperature, $humidity, $containerSize)
    {
        $baseWater = match ($plantType) {
            'cactus'     => 0.1,
            'vegetable'  => 1.0,
            'flower'     => 0.5,
            default      => 0.3,
        };

        $weatherFactor = (30 - $temperature) * 0.1 + ($humidity / 100) * 0.2;
        $containerFactor = $containerSize / 10;

        return max(0, $baseWater + $weatherFactor + $containerFactor);
    }
}
