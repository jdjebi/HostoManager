<x-layouts.app>

    <x-menus.breadcumb.breadcumb>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <i class="fad fa-users text-md text-gray-500"></i>
                <span class="ml-1 text-sm font-medium md:ml-2 dark:text-gray-400">Patients</span>
            </div>
        </li>
    </x-menus.breadcumb.breadcumb>
    
    @livewire('patients.patients-table')

</x-layouts>