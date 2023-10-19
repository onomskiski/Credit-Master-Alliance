<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class referralsController extends Controller
{
    public function index(Request $request) {
        $ref_id = strtolower(auth() -> user() -> username);

        $referred_users = DB::table('users') -> where('referred_by', $ref_id) -> get();

        return response()->json([
            'response' => $referred_users
        ], 200);
    }
}
