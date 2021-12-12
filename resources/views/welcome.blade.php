<x-guest-layout>
    <x-slot name="title">
            {{ __('Accueil') }}
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-3 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                {{ nbClassesNiveau('Trois') }}
            </div>
        </div>
        <i class="fa fa-edit"></i>
        <i class="fa fa-save"></i>
        <i class="fa fa-trash bg-red-900"></i>
        <i class="fa fa-home"></i>
    </div>
</x-guest-layout>

@push('styles')
<style type="text/css">
    i{
        font-size: 50px !important;
        padding: 10px;
    }
</style>
@endpush
