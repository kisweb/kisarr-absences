<?php

namespace App\Http\Livewire\Cem\Classes;

use App\Models\Classeroom;
use Livewire\Component;
use Livewire\WithPagination;

class Classerooms extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.cem.classes.classerooms',
        ['classerooms' => Classeroom::all()])
        ->layout('layouts.guest');
    }
}
