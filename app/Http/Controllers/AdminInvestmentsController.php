<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Investments;

class AdminInvestmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  get initial information
        $activesCount = Investments::where("status",'active')->count();
        $totalCount = Investments::all()->count();

        $activeInvestments = Investments::where('status','active')->get();

        $response = array(
            "count" => [
                "total"=> $totalCount,
                "active" => $activesCount,
            ],
            "data" => $activeInvestments
        );
        
        return view("admin.investments", [
            "data" => $response,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        try{
            Investments::where("id", $id)->delete();

            return response()->json([
                'status' => 'success',
                'message'=> 'Successfully deleted the record from the server'
            ], 201);
        }
        catch (\Exception $e){
            return response()->json([
                'status'=> 'error',
                'message'=> "An error occurred! ".$e->getMessage()
            ], 200);
        }
    }
}
