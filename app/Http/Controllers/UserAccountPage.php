<?php

namespace App\Http\Controllers;

use App\Models\Investments;
use Illuminate\Http\Request;

use App\Models\Payments;
use App\Models\Withdrawals;

class UserAccountPage extends Controller
{
    public function index(){
        return view("user.accounthistory", [
            'payments' => $this -> allPayments(),
            'investments' => $this -> allInvestments(),
            'withdrawals' => $this -> allWithdrawals(),
        ]);
    }

    public function myplans (){

        $plans = Investments::where(['status' => 'active']) -> get();
        
        return view('user.myplans', [
            'investments' => $plans,
        ]);
    }

    private function allPayments(){
        $payments = Payments::orderBy('created_at','desc') -> limit(20) -> get();
        return $payments;
    }

    private function allWithdrawals(){
        $withdrawals = Withdrawals::orderBy('created_at','desc') -> limit(20) -> get();
        return $withdrawals;
    }

    private function allInvestments(){
        $investments = Investments::orderBy('created_at','desc') -> limit(20) -> get();
        return $investments;
    }

    private function activeInvestments() {
        $invest = new Investments();
        // $investments = $invest -> where(['status' => 'term']) -> orderBy('created_at','desc') -> limit(20) -> get();
        // return $investments;
    }
}
