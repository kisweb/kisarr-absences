<?php

namespace App\Http\Controllers\Cem;

use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
    public function importStudent(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);
       // dd($request->file)->getClientOriginalName();
        Excel::import(new StudentsImport, $request->file('file'));
        return back();
       // return redirect('/students')->with('success', 'All good!');
    }
}
