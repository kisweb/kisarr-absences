<div class="p-1">

    <div class="flex gap-2">
        <x-jet-button class="bg-red-700 hover:bg-red-400" wire:click="openModalToDeleteClasse">
           Supprimer
        </x-jet-button>
    </div>

    <x-jet-dialog-modal wire:model="openModal">
        {{-- Title --}}
        <x-slot name="title">
            {{ __("Suppression de Classe") }}
        </x-slot>

        {{-- Content --}}
        <x-slot name="content">
            {{ __('Etes-vous sûr de vouloir supprimer la classe ?') }}
        </x-slot>

        {{-- Footer --}}
        <x-slot name="footer">

            {{-- Cancel button --}}
            <x-jet-secondary-button wire:click="$toggle('openModal')">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

            {{-- Delete button --}}
            <x-jet-danger-button wire:click="delete" wire:loading.attr='disabled'>
                {{ __('Delete') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>


@push('scripts')
<script>
    window.addEventListener('classeDeleted', function(e) {
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
