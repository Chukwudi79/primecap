<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class DepositController extends Controller
{
    public function deposit()
    {

        return view('deposit');
    }
    function generatePin()
    {
        $date = Carbon::now()->format('d-m-Y');
        $time = Carbon::now()->format('H:i:s');
        $deposit_request_id = auth()->user()->username . $date . $time;
        $string = str_replace('-', '', $deposit_request_id);
        $pins = str_replace(':', '', $string);
        return $pins;
    }

    public function submitDeposit()
    {

        $plan = request('h_id');
        $amount = request('amount');
        $depositMode = request('type');
        $deposit_request_id =  $this->generatePin();
        $data['plan'] = $plan;
        $data['amount'] = $amount;
        $data['depositMode'] = $depositMode;
        $data['deposit_request_id'] =$deposit_request_id;

        if ($plan == 1) {
            if ($amount < 299  || $amount > 999) {
                return Redirect::back()->withErrors("TRIAL PLAN amount should be within the range of 299.00 - $999.00");
            } else
                $this->createDeposit($plan, $depositMode, $amount, $deposit_request_id);
            $data['planName'] = "TRIAL PLAN";
            $data['profit'] = "15";
            return view('depositConfirmation', $data);
        } elseif ($plan == 2) {
            if ($amount < 1000   || $amount > 1999) {
                return Redirect::back()->withErrors("STARTER PLAN amount should be within the range of 	$599.00 - $1999.00");
            } else
                $this->createDeposit($plan, $depositMode, $amount, $deposit_request_id);
            $data['planName'] = "STARTER PLAN";
            $data['profit'] = "30";
            return view('depositConfirmation', $data);
        } elseif ($plan == 3) {
            if ($amount < 2000  || $amount > 15000) {
                return Redirect::back()->withErrors("CLASSIC PLAN amount should be within the range of 	$1999.00 - $15000.00");
            } else
                $this->createDeposit($plan, $depositMode, $amount,  $deposit_request_id);
            $data['planName'] = "CLASSIC PLAN";
            $data['profit'] = "50";
            return view('depositConfirmation', $data);
        } elseif ($plan == 4) {
            if ($amount < 16000  || $amount > 25000) {
                return Redirect::back()->withErrors("PREMIUM PLAN amount should be within the range of 	$5000 - $25000.00");
            } else
                $this->createDeposit($plan, $depositMode, $amount, $deposit_request_id);
            $data['planName'] = "PREMIUM PLAN";
            $data['profit'] = "100";
            return view('depositConfirmation', $data);
        }
    }

    protected function createDeposit($a, $b, $c, $d)
    {
        $deposit = auth()->user()->deposits()->create([
            'plan_id' => $a,
            'mode_of_deposit' => $b,
            'amount' => $c,
            'confirmed' => false,
            'deposit_request_id' =>$d
        ]);
    }
		
}
