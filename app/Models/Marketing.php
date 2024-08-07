<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class);
    }

    public function komisis()
    {
        return $this->hasMany(Komisi::class);
    }
}
