<div class="container p-1">
    @php
        $disabled = $errors->any()  ? true : false;
    @endphp

    <div class="flex gap-2">
        <x-jet-button class="bg-yellow-600 hover:bg-yellow-300" wire:click='openModalToUpdateClasse' wire:loading.attr='disabled'>
           Editer
        </x-jet-button>
    </div>

    {{-- Modal --}}
    <x-jet-dialog-modal wire:model='openModal'>
        <x-slot name="title" class="text-xl font-bold text-white bg-green-700" >
            {{ __('Mettre à jour la classe') }}
        </x-slot>

        <x-slot name="content">
            <section class="w-full p-4 mx-auto space-y-4">
                <form wire:submit.prevent='update' class="space-y-4" id="updateForm-{{ $this->formId }}">
                    @csrf
                    <div class="space-y-4">
                        <x-jet-label for="classe.refClasse" class="text-xl font-bold" value="{{ __('Référence') }}" />
                        <x-jet-input wire:model.debounce.500ms='classe.refClasse' id="classe.refClasse" class="block w-full mt-1 border border-gray-400" type="refClasse" name="refClasse" :value="old('refClasse')" />
                        <x-jet-input-error for='classe.refClasse' />
                    </div>
                    <div class="space-y-4">
                        <x-jet-label for="classe.libClasse" class="text-xl font-bold" value="{{ __('Libellé') }}" />
                        <x-jet-input wire:model.debounce.500ms='classe.libClasse' id="classe.libClasse" class="block w-full mt-1 border border-gray-400" type="libClasse" name="libClasse" :value="old('libClasse')" />
                        <x-jet-input-error for='classe.libClasse' />
                    </div>
                    <div class="space-y-4">
                        <x-jet-label for="classe.niveau" class="text-xl font-bold" value="{{ __('Niveau') }}" />
                        <select wire:model='classe.niveau' id="classe.niveau" class="block w-full mt-1 border border-gray-400">
                            <option value="">Choix niveau</option>
                            <option value="Troisième">Troisième</option>
                            <option value="Quatrième">Quatrième</option>
                            <option value="Cinquième">Cinquième</option>
                            <option value="Sixième">Sixième</option>
                        </select>
                        <x-jet-input-error for='classe.niveau' />
                    </div>
                </form>
            </section>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('openModal')">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>
            <x-buttons.primary wire:target='store' wire:loading.attr='disabled' type='submit' :disabled='$disabled' form="updateForm-{{ $this->formId }}">
                {{ __('Update') }}
            </x-buttons.primary>
        </x-slot>
    </x-jet-dialog-modal>
</div>

@push('scripts')
<script>
    window.addEventListener('ClasseUpdated', function(e) {
        Swal.fire({
            title: e.detail.title,
            text: e.detail.text,
            icon: e.detail.icon,
            iconColor: e.detail.iconColor,
            width: 600,
            padding: '3em',
            color: '#716add',
            timer: 5000,
            toast: false,
            position: 'top-right',
            timeProgressBar: true,
            showConfirmButton: true,
        });
    });
</script>
@endpush


