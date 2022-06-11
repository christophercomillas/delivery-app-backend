<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Province;

class DataController extends Controller
{
    public function country()
    {
        $client = new Client();

        $res = $client->request('GET', 'https://countriesnow.space/api/v0.1/countries');
        
        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
            $countries = json_decode($response_data);

            foreach($countries->data as $country)
            {
                echo "Country: ".$country->country."<br />";
                echo "Code: ".$country->iso2."<br />";
                echo "<br />";

                Country::create([
                    'country_code' => $country->iso2,
                    'name' => $country->country
                ]);
            }
        }
    }

    public function get_city()
    {
        // $path = storage_path() . "/json/${filename}.json"; // ie: /var/www/laravel/app/storage/json/filename.json

        // $json = json_decode(file_get_contents($path), true); 

        //176;

        $path = storage_path() . "/files/cities.json";
        $cities = json_decode(file_get_contents($path));
        
        foreach($cities as $city)
        {
            echo "name:".$name; 
        }
        // echo "<pre>";
        // print_r($cities);

    }

    public  function get_provinces()
    {
        $path = storage_path() . "/files/provinces.json";
        $provinces = json_decode(file_get_contents($path));
        
        foreach($provinces as $province)
        {
            echo "name:".$province->name."<br />"; 
            Province::create([
                'name' => $province->name,
                'province_code' => $province->key,
                'region'    => $province->region
            ]);
        }
    }
}
