<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPayments extends Controller
{
    public function index(Request $request)
    {
        $amount = $request -> amount;
        $method = $request -> method;

        switch ($method) {

            case 'ethereum':
                $view = view('user.payments.ethereum');
                break;
            case 'bitcoin':
                $view = view('user.payments.bitcoin');
                break;
            case 'litecoin':
                $view = view('user.payments.litecoin');
                break;
            case 'skrill':
                $view = view('user.payments.skrill');
                break;
            case 'bank-transfer':
                $view = view('user.payments.bank-transfer');
                break;
            case 'paypal':
                $view = view('user.payments.paypal');
                break;

            case 'paystack':
                $view = view('user.payments.paystack');
                break;

            default:
                # code...
                $view = view('user.payments.ethereum');
                break;
        }

        return $view -> with(['method' => $method, 'amount' => $amount]);
    }
}
