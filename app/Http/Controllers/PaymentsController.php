<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function create(Request $request){
        $amount = $request -> amount;
        $method = $request -> method;
        $sender = auth()->user()->username;
    }
}
