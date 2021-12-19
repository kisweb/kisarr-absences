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
        <a href="{{ route('students.export') }}" class="cursor-pointer w-1/6 btn bg-green-600 hover:bg-green-300 text-center text-xl rounded-md text-white font-semibold p-1">
            {{ __('Export students') }}
        </a>
        <div class="w-3/6 p-1 bg-yellow-50">
            <form action="{{ route('students.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-inline-group">
                    <input class="form-control" type="file" name="file" id="import">
                    <x-jet-button class="bg-green-600 hover:bg-green-300 text-center p-1">
                        {{ __('Envoyer') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
        <x-jet-button class="w-1/6 bg-green-600 hover:bg-green-300 text-center">
            {{ __('Create Student') }}
        </x-jet-button>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="font-bold tracking-wide text-left text-gray-100 uppercase bg-gray-700 border-b border-gray-600 text-md">
                    <th class="px-4 py-1">Id</th>
                    <th class="px-4 py-1">Nom complet</th>
                    <th class="px-4 py-1">Date et lieu de naissance</th>
                    <th class="px-4 py-1">Sexe</th>
                    <th class="px-4 py-1">Classe</th>
                    <th class="px-4 py-1">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($students as $student)
                        <tr class="text-gray-700">
                            <td class="px-4 py-1 font-semibold border text-ms">{{ $student->matricule }}</td>
                            <td class="px-4 py-1 font-semibold border text-ms">{{ $student->nomComplet() }}</td>
                            <td class="px-4 py-1 font-semibold border text-ms">{{ $student->dateNaissance->format('d/m/Y') }} à {{ $student->lieuNaissance }}</td>
                            <td class="px-4 py-1 text-sm border">{{ $student->sexe }}</td>
                            <td class="px-4 py-1 text-xl border">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">{{ $student->classeroom->libClasse }}</span>
                            </td>
                            <td class="flex px-2 py-1 space-x-1 text-sm border">
                            </td>
                        </tr>
                    @empty
                        <tr class="text-gray-700 text-center text-lg font-semibold">
                            <td colspan="6">Aucun élève</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="p-4 m-2 bg-indigo-200">{{ $students->links() }}</div>
        </div>
    </div>
</div>
