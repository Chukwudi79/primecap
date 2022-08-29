<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function isLocked()
    {
        return auth()->user()->account->locked;
    }

    public function sendMoney()
    {
        if (auth()->user()->account->locked) {
            return 1;
        } elseif (auth()->user()->account->account_balance > 0) {
            return view('sendMoneyForm');
        } else {
            return 0;
        }
    }
}
