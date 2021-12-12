<div class="overflow-hidden border border-gray-200 shadow sm:rounded-lg">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Les classes du CEM') }}
        </h2>
    </x-slot>
    <x-slot name="title">
            {{ __('Classes') }}
    </x-slot>
    {{-- Importer les élèves --}}
    <div class="flex gap-4 py-3 px-3">
        <x-jet-button class="w-1/6 bg-green-600 hover:bg-green-300 text-center">
            {{ __('Import students') }}
        </x-jet-button>
        <div class="w-3/6">
            <form action="{{ route('students.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-inline-group">
                    <input class="form-control" type="file" name="file" id="import">
                    <x-jet-button class="bg-green-600 hover:bg-green-300 text-center">
                        {{ __('Envoyer') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
        <x-jet-button class="w-1/6 bg-green-600 hover:bg-green-300 text-center">
            {{ __('Create Stuent') }}
        </x-jet-button>
    </div>
</div>
