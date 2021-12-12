<?php

namespace App\Http\Livewire\Cem\Students;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.cem.students.index')
                    ->layout('layouts.guest');
    }
}
