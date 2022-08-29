<?php

namespace App\Listeners;

use App\Events\DepositConfirmed;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateActiveDeposite
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(DepositConfirmed $event)
    {
		
       /*  $amount = $event->deposit->amount;
				$user = $event->deposit->user();
				$oldBalance = $user->account()->active_deposit; */

			//	$sum = $oldBalance + $amount;
		$user = 	User::find(3);
		$sum = 100;
				$user->account->update([
								'active_deposit' => $sum,
						]);		
    }
}
