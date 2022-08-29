<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\DepositConfirmed;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Auth\Listeners\UpdateActiveDeposit;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		Registered::class => [
			SendEmailVerificationNotification::class,
		],
		'App\Event\UserCreated' => [
			'App\Listeners\SendEmail'
		],

		'App\Event\PaymentRequestConfirm' => [
			'App\Listeners\Confirmed'
		],

		DepositConfirmed::class => [
			UpdateActiveDeposit::class,
		]
	];

	/**
	 * Register any events for your application.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
}
