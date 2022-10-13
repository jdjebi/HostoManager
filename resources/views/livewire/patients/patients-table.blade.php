<div>
    <div class="mt-10 mb-5 flex items-center justify-between">
        <div class="text-3xl font-bold"><i class="fad fa-users text-md"></i> Gestion patients</div>
        <div>
            <form>   
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block p-4 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Numéro patient" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Rechercher</button>
                </div>
            </form>
        </div>
    </div>
    <div>
        <x-tables.simple-table.table tbodyStyle="odd:bg-white even:bg-gray-50" class="border">
            <x-slot name="columns">
                <x-tables.simple-table.th>#</x-tables.simple-table.th>
                <x-tables.simple-table.th>Numéro</x-tables.simple-table.th>
                <x-tables.simple-table.th>Nom</x-tables.simple-table.th>
                <x-tables.simple-table.th>Prénom</x-tables.simple-table.th>
                <x-tables.simple-table.th>Date de naissance</x-tables.simple-table.th>
                <x-tables.simple-table.th>Adresse</x-tables.simple-table.th>
                <x-tables.simple-table.th>Assurance</x-tables.simple-table.th>
                <x-tables.simple-table.th>Téléphone</x-tables.simple-table.th>
                <x-tables.simple-table.th class="text-left">Actions</x-tables.simple-table.th>
            </x-slot>

            <x-slot name="rows">
                @foreach ($patients as $patient)  
                    <x-tables.simple-table.row class="odd:bg-white even:bg-gray-50">
                        <x-tables.simple-table.td class="font-medium text-gray-900 whitespace-nowrap text-xs">{{ $loop->index + 1 }}</x-tables.simple-table.td>
                        <x-tables.simple-table.td class="font-medium text-gray-900 text-xs">{{ $patient->id }}</x-tables.simple-table.td>
                        <x-tables.simple-table.td class="font-medium text-xs">{{ $patient->nom }}</x-tables.simple-table.td>
                        <x-tables.simple-table.td class="text-xs">{{ $patient->prenom }}</x-tables.simple-table.td>
                        <x-tables.simple-table.td class="text-xs">{{ $patient->date_naissance }}</x-tables.simple-table.td>
                        <x-tables.simple-table.td class="text-xs">{{ $patient->adresse }}</x-tables.simple-table.td>
                        <x-tables.simple-table.td class="text-xs">{{ $patient->assurance }}</x-tables.simple-table.td>
                        <x-tables.simple-table.td class="text-xs">{{ $patient->telephone }}</x-tables.simple-table.td>
                        <x-tables.simple-table.td class="text-xs">
                            <x-buttons.link_btn href="#go" class="text-xs">
                                Consulter
                            </x-buttons.link_btn>
                        </x-tables.simple-table.td>
                    </x-tables.simple-table.row>
                @endforeach
            </x-slot>

        </x-tables.simple-table.table>
    </div>

</div>