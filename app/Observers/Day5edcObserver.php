<?php

namespace App\Observers;

use App\Models\day5edc;
use Illuminate\Support\Facades\DB;

class Day5edcObserver
{
    public function created(day5edc $day5edc): void
    {
        $this->recalculateVpForRondeAndSesi($day5edc->ronde); // Langsung panggil recalculateVpForRondeAndSesi
    }
    
    public function updated(day5edc $day5edc): void
    {
        $this->recalculateVpForRondeAndSesi($day5edc->ronde);
    }
    
    public function deleted(day5edc $day5edc): void
    {
        $this->recalculateVpForRondeAndSesi($day5edc->ronde);
    }
    
    private function recalculateVpForRondeAndSesi($ronde)
    {
        // 1. Ambil data semua tim dengan total skor, diurutkan berdasarkan total descending
        $allTeams = DB::table('day5edcs')
            ->select('team', 
            DB::raw('AVG(skorindividu1) as skorindividu1'), 
        DB::raw('AVG(skorindividu2) as skorindividu2'),
                    )
            ->where('ronde', $ronde)
            ->groupBy('team')
            ->get();
    
        // 2. Hitung total skor untuk setiap tim
        $allTeams = $allTeams->map(function ($row) {
            $row->skorindividu1 = number_format($row->skorindividu1, 1, '.', '');
            $row->skorindividu2 = number_format($row->skorindividu2, 1, '.', '');
            $row->total = number_format(($row->skorindividu1 + $row->skorindividu2) / 2, 1, '.', '');
            return $row;
        });
    
        // 3. Urutkan berdasarkan total skor descending
        $allTeams = $allTeams->sortByDesc('total')->values();
    
        // 4. Tentukan peringkat dan hitung VP
        $rank = 1;
        $previousTotal = null;
        foreach ($allTeams as $team) {
            if ($team->total != $previousTotal) { // Periksa jika total berubah
                $rank++;
            }
    
            // Update data VP untuk tim
            day5edc::where('team', $team->team)
            ->where('ronde', $ronde)
            ->update(['vp' => ($rank <= 4) ? 4 - $rank + 1 : 0]); // Perbaikan di sini
        
        $previousTotal = $team->total;
        }
    }
}
