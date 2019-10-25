<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index() {
        $client = new \GuzzleHttp\Client();
        $res =$client->request('GET','api.openweathermap.org/data/2.5/weather?q=hanoi&appid='.env('OPEN_API_WEATHER'));
        $json = $res->getBody();
        $data = $json->getContents();
        $weather = json_decode($data);
        return view('index',compact('weather'));
    }
}
