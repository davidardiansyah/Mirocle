<?php

namespace App\Exports;

use App\Models\SensorDataFinal;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataFinal implements FromQuery, WithHeadings, ShouldQueue
{
    public function query()
    {
        $userId = auth()->user()->id;
        return SensorDataFinal::select('id', 'user_id', 'id_terapi', 'waktu_mulai', 'waktu_selesai', 'rata_rata_detak_jantung', 'kalori_total', 'putaran_pedal', 'durasi')
            ->where('user_id', $userId);
    }

    public function headings(): array
    {
        return ['ID', 'User ID', 'ID Terapi', 'Waktu Mulai', 'Waktu Selesai', 'Rata-rata Detak Jantung', 'Kalori Total', 'Putaran Pedal', 'Durasi'];
    }
}
