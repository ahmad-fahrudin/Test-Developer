<?php

namespace App\Models;

use App\Models\Marketing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komisi extends Model
{
    use HasFactory;
    protected $fillable = [
        'marketing_id', 'bulan', 'omzet', 'komisi_persen', 'komisi_nominal'
    ];
    public function marketing()
    {
        return $this->belongsTo(Marketing::class);
    }
}
