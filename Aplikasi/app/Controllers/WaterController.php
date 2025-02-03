<?php

namespace App\Controllers;

use App\Models\WaterModel;

class WaterController extends BaseController
{
    protected $waterModel;

    public function __construct()
    {
        $this->waterModel = new WaterModel();
    }

    public function index()
    {
        return view('water');
    }

    public function calculate()
    {
        $city = $this->request->getPost('city');
        $plantType = $this->request->getPost('plantType');
        $containerSize = $this->request->getPost('containerSize');

        $weatherData = $this->waterModel->getWeatherData($city);

        if (!$weatherData) {
            return redirect()->back()->with('error', 'Data Kota Tidak Ditemukan, Mohon Periksa Kembali Data Kota.');
        }

        $waterNeeds = $this->waterModel->calculateWaterNeeds(
            $plantType,
            $weatherData['temperature'],
            $weatherData['humidity'],
            $containerSize
        );

        return view('water', [
            'waterNeeds'  => $waterNeeds,
            'weatherData' => $weatherData,
            'city'        => $city,
        ]);
    }
}
