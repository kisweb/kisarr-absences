<?php

namespace App\Http\Livewire\Cem\Classes;

use Livewire\Component;

class Edit extends Component
{
    public $classe;
    public $openModal = false;
    public $formId;

    public function mount($classe)
    {
        $this->formId = $classe->id();
    }

    protected $rules = [
        'classe.refClasse' => ['required', 'integer', 'unique:classerooms,refClasse'],
        'classe.libClasse' => ['required', 'string','unique:classerooms,libClasse'],
        'classe.niveau' => ['required'],
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function openModalToUpdateClasse()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function update()
    {
        $this->classe->update([
            'refClasse' =>  $this->classe->refClasse,
            'libClasse' =>  $this->classe->libClasse,
            'niveau'    =>  $this->classe->niveau,
        ]);

        $this->emit('saved');

        $this->dispatchBrowserEvent('ClasseUpdated', [
            'title'     =>  config('app.name'),
            'icon'      =>  'success',
            'iconColor' =>  'green',
            'text'      =>  'La classe libellée '. $this->classe->libClasse. ' a été mise à jour avec succès',
        ]);

        //session()->flash('success', 'Classe créée avec succès !');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.cem.classes.edit');
    }
}
