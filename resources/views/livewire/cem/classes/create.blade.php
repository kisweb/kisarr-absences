<div class="container p-4">
    @php
        $disabled = $errors->any() || is_null($this->refClasse) || is_null($this->libClasse) || is_null($this->niveau) ? true : false;
    @endphp

    <div class="flex">
        <x-jet-button class="w-1/6 bg-green-600 hover:bg-green-300 text-center" wire:click='openModalToCreateClasse' wire:loading.attr='disabled'>
            {{ __('Create Classe') }}
        </x-jet-button>
    </div>

    {{-- Modal --}}
    <x-jet-dialog-modal wire:model='openModal'>
        <x-slot name="title" class="text-xl font-bold text-white bg-green-700" >
            {{ __('Create classe') }}
        </x-slot>

        <x-slot name="content">
            <section class="w-full p-4 mx-auto space-y-4">
                <form wire:submit.prevent='store' class="space-y-4" id="submitForm">
                    <div class="space-y-4">
                        <x-jet-label for="refClasse" class="text-xl font-bold" value="{{ __('Référence') }}" />
                        <x-jet-input wire:model.debounce.500ms='refClasse' id="refClasse" class="block w-full mt-1 border border-gray-400" type="refClasse" name="refClasse" :value="old('refClasse')" />
                        <x-jet-input-error for='refClasse' />
                    </div>
                    <div class="space-y-4">
                        <x-jet-label for="libClasse" class="text-xl font-bold" value="{{ __('Libellé') }}" />
                        <x-jet-input wire:model.debounce.500ms='libClasse' id="libClasse" class="block w-full mt-1 border border-gray-400" type="libClasse" name="libClasse" :value="old('libClasse')" />
                        <x-jet-input-error for='libClasse' />
                    </div>
                    <div class="space-y-4">
                        <x-jet-label for="niveau" class="text-xl font-bold" value="{{ __('Niveau') }}" />
                        <select wire:model='niveau' id="niveau" class="block w-full mt-1 border border-gray-400">
                            <option value="">Choix niveau</option>
                            <option value="Troisième">Troisième</option>
                            <option value="Quatrième">Quatrième</option>
                            <option value="Cinquième">Cinquième</option>
                            <option value="Sixième">Sixième</option>
                        </select>
                        <x-jet-input-error for='niveau' />
                    </div>
                </form>
            </section>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('openModal')">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>
            <x-buttons.primary wire:target='store' wire:loading.attr='disabled' type='submit' :disabled='$disabled' form="submitForm">
                {{ __('Create') }}
            </x-buttons.primary>
        </x-slot>
    </x-jet-dialog-modal>
</div>

@push('scripts')
<script>
    window.addEventListener('ClasseCreated', function(e) {
        Swal.fire({
            title: e.detail.title,
            text: e.detail.text,
            icon: e.detail.icon,
            iconColor: e.detail.iconColor,
            width: 500,
            padding: '1em',
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


