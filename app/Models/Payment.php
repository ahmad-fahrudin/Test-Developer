<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'transaction_number', 'amount', 'payment_date', 'status'
    ];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'transaction_number', 'transaction_number');
    }
}
