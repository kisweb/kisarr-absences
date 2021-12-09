<?php

namespace App\Http\Livewire\Cem\Classes;

use Livewire\Component;

class Delete extends Component
{
    public $classe;
    public $openModal = false;

    public function openModalToDeleteClasse()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function delete()
    {
        $this->classe->delete();

        $this->dispatchBrowserEvent('classeDeleted', [
            'title'     =>  config('app.name'),
            'icon'      =>  'warning',
            'iconColor' =>  'red',
            'text'      =>  'La classe libellée '. $this->classe->libClasse. ' a été supprimée avec succès',
        ]);

        $this->emitUp('saved');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.cem.classes.delete');
    }
}
