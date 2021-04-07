<?php

namespace App\Exports;

use App\Models\Committee;
use App\Models\Leader;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeadersExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        return Leader::query()->where('committee_id', $this->id)->get(['name', 'title', 'image']);
    }

    public function headings(): array
    {
        return [
            "name",
            "title",
            "image"
        ];
    }
}
