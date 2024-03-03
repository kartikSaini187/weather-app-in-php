<?php

namespace App\Component;
use GuzzleHttp\Client;


class Helper 
{
    public function currentweather($location){
        $client = new Client();
        $url = "https://api.weatherapi.com/v1/current.json?key=0bab7dd1bacc418689b143833220304&q=$location&aqi=yes";
        $response = $client->request("GET",$url);
        $response = ($response->getBody()); 
       $response_arr = json_decode($response,true);
        return $response_arr;
         
    }

    public function History($dt,$loc){
        $client = new Client();
        $url = "http://api.weatherapi.com/v1/history.json?key=0bab7dd1bacc418689b143833220304&q=$loc&dt=2010-01-01";
        $response = $client->request("GET",$url);
        $response = ((string) $response->getBody());
         $response_arr = json_decode($response,true);
        return $response_arr;
         
    }
    public function Sports($loc){
        $client = new Client();
        $url = "http://api.weatherapi.com/v1/sports.json?key=0bab7dd1bacc418689b143833220304&q=$loc";
       
        $response = $client->request("GET",$url);
        $response = ((string) $response->getBody());
         $response_arr = json_decode($response,true);
        return $response_arr;
         
    }
    public function Astronomy($dt,$loc){
        $client = new Client();
        $url = "http://api.weatherapi.com/v1/astronomy.json?key=0bab7dd1bacc418689b143833220304&q=$loc&dt=$dt";
        $response = $client->request("GET",$url);
        $response = ((string) $response->getBody());
         $response_arr = json_decode($response,true);
        return $response_arr;
         
    }

    public function Forecast($loc){
        $client = new Client();
        $url = "http://api.weatherapi.com/v1/forecast.json?key=0bab7dd1bacc418689b143833220304&q=$loc&days=1&aqi=no&alerts=yes";
        $response = $client->request("GET",$url);
        $response = ((string) $response->getBody());
         $response_arr = json_decode($response,true);
        return $response_arr;
         
    }

    public function Timezone($location){
        $client = new Client();
        $url = "http://api.weatherapi.com/v1/timezone.json?key=0bab7dd1bacc418689b143833220304&q=$location";
        $response = $client->request("GET",$url);
        $response = ((string) $response->getBody());
         $response_arr = json_decode($response,true);
        return $response_arr;
         
         
    }
  
}