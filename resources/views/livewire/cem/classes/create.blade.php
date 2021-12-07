@php
    $disabled = $errors->any() || empty($this->refClasse) || empty($this->libClasse) || empty($this->niveau) ? true : false;
@endphp

<section class="w-1/2 p-4 mx-auto space-y-4 shadow">
    <h2 class="text-sm text-indigo-500">
        Create Classe
    </h2>
    <form wire:submit.prevent='store' class="space-y-4">
        <div class="space-y-4">
            <x-jet-label for="refClasse" value="{{ __('Référence') }}" />
            <x-jet-input wire:model.debounce.500ms='refClasse' id="refClasse" class="block w-full mt-1" type="refClasse" name="refClasse" :value="old('refClasse')" required autofocus />
            <x-jet-input-error for='refClasse' />
        </div>
        <div class="space-y-4">
            <x-jet-label for="libClasse" value="{{ __('Libellé') }}" />
            <x-jet-input wire:model.debounce.500ms='libClasse' id="libClasse" class="block w-full mt-1" type="libClasse" name="libClasse" :value="old('libClasse')" required autofocus />
            <x-jet-input-error for='libClasse' />
        </div>
        <div class="space-y-4">
            <x-jet-label for="niveau" value="{{ __('Niveau') }}" />
            <select wire:model.debounce.500ms='niveau' id="niveau" class="block w-full mt-1" type="niveau" name="niveau" :value="old('niveau')">
                <option value="Troisième">Troisième</option>
                <option value="Quatrième">Quatrième</option>
                <option value="Cinquième">Cinquième</option>
                <option value="Sixième">Sixième</option>
            </select>
            <x-jet-input-error for='niveau' />
        </div>
        <x-buttons.primary wire:target='store' wire:loading.attr='disabled' type='submit' :disabled='$disabled'>
            {{ __('Create') }}
        </x-buttons.primary>
    </form>
</section>
