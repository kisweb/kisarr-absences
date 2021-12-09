<div class="overflow-hidden border border-gray-200 shadow sm:rounded-lg">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Les classes du CEM') }}
        </h2>
    </x-slot>
    <x-slot name="title">
            {{ __('Classes') }}
    </x-slot>
    {{-- Create classe --}}
    <livewire:cem.classes.create />
    <br>
    <livewire:cem.classes.index />
</div>
