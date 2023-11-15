<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;

class ManualCreditController extends Controller
{
    public function update(Request $request){
        try{
            
            $user = User::where(['username' => $request -> user]) -> first();

            if($user == null){
                $user = User::where(['username' => $request -> user])->first();
            }

            if($user == null){
                return response()->json([
                    'status' => 404,
                    'message'=> 'no user found'
                ], 200);
            }

            $balances = json_decode($user -> balances, true);

            // $currentBalance = $balance -> usd;
            $change = $request -> amount;
            
            $balance = $request -> type === 'credit' ? ($balances['usd'] + $change) : ($balances['usd'] - $change);
            $balances['usd'] = $balance;

            // return $balances;

            User::where(['username' => $user -> username])->update(['balances' => json_encode($balances)]);

            return response()->json([
                'status' => 200,
                'message' => "User's balance have been updated to {$balance}"
            ], 200);
        }
        catch(\Exception $e){
            return response()->json([
                'status' => 500,
                'error'=> $e->getMessage()
            ], 200);
        }
    }
}
