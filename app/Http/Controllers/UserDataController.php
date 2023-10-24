<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Models\Withdrawals;
use App\Models\Investments;
use App\Models\User;
use Illuminate\Http\Request;
// use App\Models\User;

class UserDataController extends Controller
{
    public function index(){
        try{
            $user = auth() -> user();
            // get user' wallet balance
            $balances = $user -> balances;
            $profit = Investments::where(['user' => $user -> username, 'status' => 'active']) -> sum('profit');
            $bonus = $user -> total_bonus;
            $referredUsers = User::where(['referred_by' => $user -> username]) -> count();
            $totalInvestmentPlans = Investments::where(['user' => $user -> username]) -> count();
            $activeInvestmentPlans = Investments::where(['user' => $user -> username, 'status' => 'active']) -> sum('capital');
            $totalDeposits = Payments::where(['sender' => $user -> username]) -> sum('amount');
            $totalWithdrawals = Withdrawals::where(['user' => $user -> username]) -> sum('amount');

            $data = [
                'balances' => json_decode(json_encode($balances), true),
                'profit' => $profit,
                'bonus' => $bonus,
                'referredUsers' => $referredUsers,
                'investments' => [
                    'count' => $totalInvestmentPlans,
                    'active' => $activeInvestmentPlans,
                ],
                'deposits' => $totalDeposits,
                'withdrawals' => $totalWithdrawals,
            ];

            $view = $user -> role == 'user' ? view('user.dashboard', ['data' => $data]) : ($user -> role == 'admin' ? view('admin.dashboard', ['data' => $data]) : abort(405));
            
            return $view;
        }
        catch(\Exception $e){
            return $e -> getMessage();
        }
    }
}
