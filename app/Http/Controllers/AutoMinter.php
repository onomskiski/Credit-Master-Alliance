<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Investments;
use App\Models\Plans;

class AutoMinter extends Controller
{
    public function mine(){
        try{
            // Get all active investments
            $activeInvestments = Investments::where('status', 'active')->get();

            // return $activeInvestments;

            foreach ($activeInvestments as $investment) {
                print_r ([
                    $this -> reward($investment),
                    $this -> terminateIfDue($investment)
                ]);
            }

            // return 'Investments updated successfully';
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    private function terminateIfDue($investment){
        
        $now = Carbon::now();
        $dueAt = Carbon::parse($investment->due_at);

        print "Nooooooo <br>";
        
        // Check if the investment has crossed the due date
        if ($now >= $dueAt) {
            // Investment has expired, so we need to terminate it
            $investment->status = 'terminated';
        
            // Save the updated investment
            $investment->save();
        
            return "Terminated";
        }
        return "Not Terminated";
    }
    
    private function reward ($investment){

        // Investment has expired, so we need to terminate it
        
        // Calculate profit with a random value between min_return and max_return from the plan
        $plan = Plans::where('name', $investment->plan)->first();
        $randomProfit = mt_rand($plan->min_return, $plan->max_return);
        $profitGenerated = (($randomProfit/$plan -> duration));
        $updatedProfit = ($investment -> profit) + $profitGenerated;
        $investment->profit = $updatedProfit;

        // Save the updated investment
        $investment->save();

        return "Rewarded with {$randomProfit} as {$profitGenerated} added to {$investment -> profit}";
        
    }
}
