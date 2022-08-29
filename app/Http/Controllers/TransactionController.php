<?php

namespace App\Http\Controllers;

use App\Models\Authorizereceiver;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function confirmTransaction()
    {
	
       // $authorize = Authorizereceiver::all()->pluck('authorize_receivers')->toArray();
       /*  $authorize = Authorizereceiver::where('account_id', '=', auth()->id())->pluck('authorize_receivers')->toArray();
        if(in_array(request('accountNumber'), $authorize)) { */
           
					if( request('amount') < 100) {
						return "You can not make withdrawal request bellow $100.00";
					} 
					if (auth()->user()->account->account_balance < request('amount')) {
                return "Insufficient Fund";
            } else  {
							
                auth()->user()->account->update([
                    'account_balance' => auth()->user()->account->account_balance - request('amount')
                ]);
													
                auth()->user()->transactions()->create([
                    'amount' => request('amount'),
                    'is_sent' => false,
                     'transaction_with' => request('firstname') . " " . request('surname'), 
                   'date_time' =>now()
                ]);

                /*  return "Actual Balance= " . auth()->user()->account->balance; */
                return "Your withdrawal request of " . request('amount') . " was successful. You will receive an email after 24 hours";
            }
          /*  }
					 else{
            return "Error! transfer failed due to  unrecongnized location";
        } */
    }

    public function transactionsHistory()
    {
        return view('transactionsHistory');
    }
}
