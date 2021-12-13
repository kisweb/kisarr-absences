<?php

namespace App\Exports;

use App\Models\Classeroom;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClassesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

    }
}
