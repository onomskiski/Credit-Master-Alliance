<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Withdrawals as Withdrawal;

class Withdrawals extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){
        try{
            $amount = $request -> amount;
            $method = $request -> method;
            $address = $request -> address;

            $withdrawals = new Withdrawal();

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
        catch(\Exception $e){
            return response()->json([
                'status' => 500,
                'response' => 'An error occurred while processing your request:::'.$e
            ], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
