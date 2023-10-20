<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investments as Invest;

class Investments extends Controller
{
    public function subscribe(Request $request){
        $amount = $request->amount;
        $plan = $request -> plan;
        $user = auth() -> user() -> username;

        try{
            $jsonBalances = auth() -> user() -> balances;
            $balances = json_decode($jsonBalances, true);

            if($amount < 10){
                return response()->json([
                    'status' => 'error',
                    'message'=> 'You can\'t invest below $10',
                ], 200);
            }
            
            if($balances == null | !isset($balances['usd'])){
                return response()->json([
                    'status' => 'error',
                    'message'=> 'Invalid or missing balances data'
                ], 422);
            }

            $myBalance = $balances['usd'];

            if($amount > $myBalance){
                return response()->json([
                    'status'=> 'error',
                    'message'=> 'Insufficient balance, please fund your account first'
                ], 422);
            }   
            
            $invest = new Invest();
    
            $invest -> user = $user;
            $invest -> plan = $plan;
            $invest -> capital = $amount;
    
            if($invest -> save()){
                return response()->json([
                    "status"=> "success",
                    "message"=> "Subscription successful"
                ], 201);
            }
            else{
                return response()->json([
                    "status"=> "error",
                    "message"=> "Could not create subscription"
                ], 200);
            }
        }

        catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred ::: '.$e,
            ], 500);
        }
    }
}
