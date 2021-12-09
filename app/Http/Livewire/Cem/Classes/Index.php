<?php

namespace App\Http\Livewire\Cem\Classes;

use App\Models\Classeroom;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $perPage = 10;

    protected $listeners = ['saved' => '$refresh'];

    public function render()
    {
        return view('livewire.cem.classes.index', [
            'classerooms' => Classeroom::search($this->search)->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                                        ->paginate($this->perPage)

        ])->layout('layouts.guest');
    }
}
