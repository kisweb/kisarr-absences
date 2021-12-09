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
    <section class="container p-6 mx-auto font-mono">
        <div class="flex items-center justify-between mb-2 space-x-2 bg-gray-200">
            <div class="w-6/12">
                <input wire:model.debounce.500ms='search' class="relative w-full px-3 py-3 mt-1" type="search" placeholder="Rechercher ..." />
            </div>
            <div class="w-2/12">
                <select class="w-full px-4 py-3 mt-1" wire:model='orderBy'>
                    <option value="libClasse">Trier par :</option>
                    <option value="id">ID</option>
                    <option value="refClasse">Réf classe</option>
                    <option value="niveau">Niveau</option>
                </select>
            </div>

            <div class="w-2/12">
                <select class="w-full px-4 py-3 mt-1" wire:model='orderAsc'>
                    <option value="">Le tri est</option>
                    <option value="1">Croissant</option>
                    <option value="0">Décroissant</option>
                </select>
            </div>

            <div class="w-2/12">
                <select class="w-full px-4 py-3 mt-1" wire:model='perPage'>
                    <option value="">Afficher</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                </select>
            </div>
        </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 text-md">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3">Réf</th>
                        <th class="px-4 py-3">Classe</th>
                        <th class="px-4 py-3">Niveau</th>
                        <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse ($classerooms as $classe)
                        <tr class="text-gray-700">
                        <td class="px-4 py-3 font-semibold border text-ms">{{ $classe->id() }}</td>
                        <td class="px-4 py-3 font-semibold border text-ms">{{ $classe->refClasse() }}</td>
                        <td class="px-4 py-3 text-xs border">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">{{ $classe->libClasse }}</span>
                        </td>
                        <td class="px-4 py-3 text-sm border">{{ $classe->niveau() }}</td>
                        <td class="flex px-4 py-3 space-x-6 text-sm border">
                            <livewire:cem.classes.edit :classe=$classe :wire:key="'edit-classe'. now() . $classe->id()" />
                            <livewire:cem.classes.delete :classe=$classe :wire:key="'delete-classe'.$classe->id()" />
                        </td>
                        </tr>
                        @empty
                            <div>Pas de classes</div>
                        @endforelse
                    </tbody>
                </table>
                <div class="p-4 m-2 bg-indigo-200">{{ $classerooms->links() }}</div>
            </div>
        </div>
    </section>
</div>

