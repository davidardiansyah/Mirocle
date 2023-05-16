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
        $userId = auth()->user()->id; // Ambil ID pengguna yang sedang login
        return SensorDataFinal::query()->where('user_id', $userId);
    }

    public function headings(): array
    {
        $columns = $this->getColumns();
        return array_values($columns);
    }

    private function getColumns(): array
    {
        /** @var Builder $query */
        $query = $this->query();
        $columns = $query->getConnection()->getSchemaBuilder()->getColumnListing($query->from);

        return $columns;
    }
}
