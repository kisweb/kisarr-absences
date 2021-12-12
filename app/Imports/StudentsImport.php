<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class StudentsImport implements

    ToCollection,
    WithHeadingRow

{
    use Importable;

    public function collection(Collection $rows)
    {
        ($rows);
        foreach ($rows as $row) {

            $student = Student::create([

                'prenoms'       => $row['prenoms'],
                'nom'           => $row['nom'],
                'dateNaissance' => $row['date_naissance'],
                'lieuNaissance' => $row['lieu_naissance'],
                'sexe'          => $row['sexe'],
                'matricule'     => $row['matricule'],
                'cd'            => $row['cd'],
                'classeroom_id' => $row['classeroom_id'],
                'provenance'    => $row['provenance'],
                'pere'          => $row['pere'],
                'mere'          => $row['mere'],
                'tuteur'        => $row['tuteur'],
                'contact'       => $row['contact'],
                'adresse'       => $row['adresse'],
            ]);
        }
    }

}
