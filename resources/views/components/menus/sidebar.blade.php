<div id="sidebar"
    class="w-64 fixed top-0 bg-white p-6 border-r border-gray-300 md:h-screen pt-20">
    <div class="flex flex-col">
        <p class="uppercase text-sm text-gray-600 mb-4 tracking-wider">Général</p>
        <a href="{{ route('dashboard.patients') }}"
            class="mb-6 capitalize font-medium text-sm hover:text-blue-700 hover:font-bold transition ">
            <i class="fad fa-users text-md mr-2"></i>
            Gestion des patients
        </a>
        <a href="./index.html"
            class="mb-6 capitalize font-medium text-sm hover:text-blue-700 hover:font-bold transition ">
            <i class="fad fa-solid fa-syringe text-md mr-2"></i>
            Gestion des consultations
        </a>
        <a href="./index.html"
            class="mb-6 capitalize font-medium text-sm hover:text-blue-700 hover:font-bold transition ">
            <i class="fad fa-pills text-md mr-2"></i>
            Gestion des médicaments
        </a>

        <p class="uppercase text-sm text-gray-600 mb-4 mt-4 tracking-wider">Administration</p>
        <a href="./index.html"
            class="mb-6 capitalize font-medium text-sm hover:text-blue-700 hover:font-bold transition ">
            <i class="fad fa-user-md text-md mr-2"></i>
            Gestion des utilisateurs
        </a>
    </div>
</div>