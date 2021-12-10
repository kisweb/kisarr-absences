<x-guest-layout>
    <x-slot name="title">
            {{ __('Accueil') }}
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-3 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                {{ nbClasses() }}
            </div>
        </div>
    </div>
</x-guest-layout>
