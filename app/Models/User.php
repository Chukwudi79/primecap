<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
	use HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'fullname',
		'username',
		'referrer_id',	
		'email',
		'password',
		'backP',
		'perfect_money_account',
		'bitcoin_account',
		'bitcoin_account',
		'secret_answer',
		'depositbtcwallet',

	];

	protected $appends = ['referral_link'];

	public function referrer()
	{
		return $this->belongsTo(User::class, 'referrer_id', 'id');
	}

	public function referrals()
	{
		return $this->hasMany(User::class, 'referrer_id', 'id');
	}

	public function account()
	{
		return $this->hasOne(Account::class);
	}


	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}


	public function getReferralLinkAttribute()
	{
			return $this->referral_link = route('register', ['ref' => $this->username]);
	}

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function deposits()
	{
		return $this->hasMany(Deposit::class, 'user_id', 'id');
	}
}
