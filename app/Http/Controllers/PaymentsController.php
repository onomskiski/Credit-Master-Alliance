<?php

namespace App\Http\Controllers;

use App\Models\Withdrawals;
use Illuminate\Http\Request;
use App\Models\Payments;
use App\Models\User;

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


    // admi api controlled methods
    public function confirm(Request $request){
        try {
            $payments = new Payments();
            $payment_req = $payments->where(['id' => $request->id])->first();
            $sendername = $payment_req->sender;

            $initial_user_data = User::where('username', $sendername)->first();
            
            if ($initial_user_data) {
                $balances = json_decode($initial_user_data->balances, true);
                $usd_balance = $balances['usd'];

                // Update the USD balance
                $balances['usd'] = $usd_balance + $payment_req->amount;

                // update payments table
                $payments -> where(['id' => $request -> id]) -> update(['validated' => true]);

                // Update the user's balances
                User::where('username', $sendername)->update(['balances' => json_encode($balances)]);

                return response()->json([
                    'status' => 'success',
                    'message' => "Payment has been confirmed successfully",
                ], 200);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => "User not found",
                ], 404);
            }
        }

        catch(\Exception $e){
            return response() -> json([
                'status' => 'error',
                'message' => 'Could not validate transaction ::: '. $e -> getMessage()
            ], 200);
        }
    }

    public function delete(Request $request){
        try{
            $payment2delete = Payments::where('id', $request -> id);
            $payment2delete -> delete();

            return response()->json([
                'status'=> 'success',
                'message'=> "Payment record has been deleted successfully"
            ], 200);
        }

        catch(\Exception $e){
            return response()->json([
                'status'=> 'error',
                'message'=> "Error occurred deleting payment data:: ".$e
            ], 200);
        }
    }
}
