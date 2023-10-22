<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Http\Request;
use App\Models\Investments;
use App\Models\Payments;
use App\Models\Withdrawals;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDataController extends Controller
{
    public function index(){
        // obtain users balance
        $user = new User();
        // all users count
        $allUsers = $user -> where(['role' => 'user']) -> count();
        // users balance check
        $usersBalance = $user -> totalUsdBalances();

        
        // get total profit
        $investments = new Investments();
        $totalProfit = $investments -> totalProfits();
        
        //  sum of active investments
        $activeInvestments = $investments -> where(['status' => 'active']) -> sum('capital');
        // sum of all investments (active and inactive)
        $totalInvestments = $investments -> where(['status' => 'active']) -> count();
        //  sum of all invested amount
        $investmentsSum = $investments -> sum('capital');
        // total users profit
        // $totalUsersProfit = $investments -> where(['status' => 'active']) -> sum('profit');
        // get total investments
        $activeInvestmentsCount = $investments -> where(['status' => 'active']) -> count();

        $user -> where(['role' => 'user']) -> count();

        // get a total of all active users
        $activeUsers = $user::whereHas('investments', function ($query) {
            $query->where('status', 'active');
        })->count();

        // check all new users
        $today = Carbon::today();
        $newUsers = User::whereDate('created_at', $today) -> where(['role' => 'user']) -> count();
        
        return response()->json([
            'status' => 'success',
            'response' => [
                'user' => [
                    'balance' => number_format($usersBalance),
                    'newbies' => number_format($newUsers),
                    'active' => number_format($activeUsers),
                    'all' => number_format($allUsers)
                ],
                'investment' => [
                    'sum' => number_format($investmentsSum),
                    'profit' => number_format($totalProfit),
                    'active' => number_format($activeInvestments),
                    'total' => number_format($totalInvestments),
                ]
            ]
        ], 200);
        
    }

    public function page(){
        $payments = new Payments();
        $pendingPayments = Payments::where('validated', '==', false) -> get();
        
        // withdrawals data
        $withdrawals = new Withdrawals();
        $pendingWithdrawals = $withdrawals -> where(['confirmed' => 0]) -> get();

        // data for all new staff
        $today = Carbon::today();
        $newUsers = User::whereDate('created_at', $today) -> where(['role' => 'user']) -> get();
        
        return view('admin.dashboard', [
            'payments' => $pendingPayments,
            'paymentsCount' => [
                'all' => $payments -> where(['validated' => true]) -> count(),
                'pending' => $payments -> where(['validated' => false]) -> count()
            ],
            'withdrawals' => $pendingWithdrawals,
            'withdrawalCount' => [
                'all'=> $withdrawals -> where(['confirmed'=> true]) -> count(),
                'pending'=> $withdrawals -> where(['confirmed'=> false]) -> count()
            ],
            'newbies' => $newUsers,
        ]);
    }

    public function PendingPayments(Request $request){
        $pendingPayments = Payments::where('validated', '==', false) -> get();
        return response()->json(
            [
                'status'=> 'success',
                'message' => $pendingPayments
            ], 200);
    }
}
