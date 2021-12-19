<?php

namespace App\Http\Livewire\Cem\Classes;

use App\Models\Classeroom;
use Livewire\Component;

class Create extends Component
{
    public $refClasse;
    public $libClasse;
    public $niveau;
    public $openModal = false;

    protected $rules = [
        'refClasse' => ['required', 'integer', 'unique:classerooms,refClasse'],
        'libClasse' => ['required', 'string','unique:classerooms,libClasse'],
        'niveau' => ['required'],
    ];

    public function openModalToCreateClasse()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

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

        $this->dispatchBrowserEvent('ClasseCreated', [
            'title'     =>  config('app.name'),
            'icon'      =>  'success',
            'iconColor' =>  'green',
            'text'      =>  'La classe libellée '. $this->libClasse. ' a été créée avec succès',
        ]);

        $this->emitUp('saved');
        //session()->flash('success', 'Classe créée avec succès !');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.cem.classes.create');
    }
}
