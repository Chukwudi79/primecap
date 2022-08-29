<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorizereceiver extends Model
{
    use HasFactory;

    protected $fillable = [
        'authorize_receivers'
    ];
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
