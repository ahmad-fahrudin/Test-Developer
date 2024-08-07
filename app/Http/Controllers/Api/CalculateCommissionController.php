<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Komisi;
use App\Models\Marketing;
use Carbon\Carbon;

class CalculateCommissionController extends Controller
{
    public function index()
    {
        $marketings = Marketing::with('penjualans')->get();
        $results = [];

        foreach ($marketings as $marketing) {
            $penjualans = $marketing->penjualans;
            $monthlyOmzet = [];

            foreach ($penjualans as $penjualan) {
                $month = Carbon::parse($penjualan->date)->format('Y-m');
                if (!isset($monthlyOmzet[$month])) {
                    $monthlyOmzet[$month] = 0;
                }
                $monthlyOmzet[$month] += $penjualan->grand_total;
            }

            foreach ($monthlyOmzet as $month => $omzet) {
                $komisiPersen = $this->getKomisiPersen($omzet);
                $komisiNominal = ($komisiPersen / 100) * $omzet;

                $results[] = [
                    'Marketing' => $marketing->name,
                    'Bulan' => $month,
                    'Omzet' => $omzet,
                    'Komisi %' => $komisiPersen,
                    'Komisi Nominal' => $komisiNominal,
                ];

                Komisi::create([
                    'marketing_id' => $marketing->id,
                    'bulan' => $month,
                    'omzet' => $omzet,
                    'komisi_persen' => $komisiPersen,
                    'komisi_nominal' => $komisiNominal,
                ]);
            }
        }

        return response()->json($results);
    }

    private function getKomisiPersen($omzet)
    {
        if ($omzet >= 500000000) {
            return 10;
        } elseif ($omzet >= 200000000) {
            return 5;
        } elseif ($omzet >= 100000000) {
            return 2.5;
        }
        return 0;
    }
}
