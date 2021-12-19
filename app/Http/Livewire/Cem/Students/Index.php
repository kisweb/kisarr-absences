<?php

namespace App\Http\Livewire\Cem\Students;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $orderBy = 'matricule';
    public $orderAsc = true;
    public $perPage = 10;

    public function render()
    {
        return view('livewire.cem.students.index', [
            'students' => Student::search($this->search)
                                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                                    ->paginate($this->perPage)
                                ])
                                ->layout('layouts.guest');
    }
}
