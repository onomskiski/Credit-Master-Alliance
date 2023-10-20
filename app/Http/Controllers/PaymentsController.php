<?php

namespace App\Http\Controllers;

use App\Models\Withdrawals;
use Illuminate\Http\Request;
use App\Models\Payments;

class PaymentsController extends Controller
{
    public function create(Request $request){
        $amount = $request -> amount;
        $method = $request -> method;
        $sender = auth()->user()->username;
        $id = $request -> entry_id;
        // $photo = $request -> file("photo");
        
        $payments = new Payments();

        $payments -> sender = $sender;
        $payments -> amount = $amount;
        $payments -> method = $method;
        $payments -> entry_id = $id;
        // $payments -> photo = $photo;

        if($payments -> save()){
            return response()->json([
                'status' => 201,
                'response' => "Payment created successfully, awaiting admin confirmation"
            ], 200);
        }
        else{
            return response()->json(['status' => 400, 'response' => 'An error occurred'], 200);
        }
        
    }

    public function withdraw(Request $request){
        $amount = $request -> amount;
        $method = $request -> method;
        $address = $request -> address;

        $withdrawals = new Withdrawals();

        $withdrawals -> user = auth() -> user() -> username;
        $withdrawals -> amount = $amount;
        $withdrawals -> address = $address;
        $withdrawals -> method = $method;

        if($withdrawals -> save()){
            return response()->json([
                'status' => 201,
                'response' => 'Withdrawal Request Processing'
            ], 201);
        }
        else{
            return response()->json([
                'status' => 400,
                'response' => 'An error occurred while processing your request'
            ], 200);
        }
    }
}
