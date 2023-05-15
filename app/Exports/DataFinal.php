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
        return SensorDataFinal::query();
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
