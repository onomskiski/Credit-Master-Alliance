<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Exchange extends Controller
{
    public function index(Request $request){
        $from = $request -> from;
        $to = $request -> to;
        $amount = $request -> amount;

        $url = "https://247cointrading.com/app/dashboard/asset-price/{$from}/{$to}/{$amount}";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        return $httpStatus;
        
    }
}
