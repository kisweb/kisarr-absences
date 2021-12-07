<?php

namespace App\Http\Livewire\Cem\Classes;

use App\Models\Classeroom;
use Livewire\Component;

class Create extends Component
{
    public $refClasse;
    public $libClasse;
    public $niveau;

    protected $rules = [
        'refClasse' => ['required', 'integer', 'unique:classerooms,refClasse'],
        'libClasse' => ['required', 'string','unique:classerooms,libClasse'],
        'niveau' => ['required'],
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        Classeroom::create([
            'refClasse' =>  $this->refClasse,
            'libClasse' =>  $this->libClasse,
            'niveau'    =>  $this->niveau,
        ]);

        session()->flash('success', 'Classe créée avec succès !');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.cem.classes.create');
    }
}
