<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $fillable = [
        'user_id',
        'account_type',
        'withdrawal_type',       // NEW (crypto or bank)
        'crypto_currency',       // for crypto withdrawals
        'wallet_address',        // for crypto withdrawals
        'bank_name',             // for bank withdrawals
        'bank_account_name',     // for bank withdrawals
        'bank_account_number',   // for bank withdrawals
        'amount',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
