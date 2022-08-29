<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'mode_of_deposit',
        'amount',
        'confirmed',
        'deposit_request_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
