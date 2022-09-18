<x-guest-layout>
    <style>
        body {
            background-image: url('/img/medical2.jpg');
            background-size: cover;
        }

        .hosto-brand {
            position: absolute;
            text-align: center;
            width: 100%;
            padding-top: 55px;
        }

        #login-container {
            background-color: rgba(0, 0, 0, 0.714);
        }
    </style>
    <div class="hosto-brand mb-5">
        <span class="text-5xl font-bold text-white"></span>
    </div>
    <div id="login-container" class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="mb-4">
            <span class="text-4xl font-bold text-white"><i class="fad fa-duotone fa-stethoscope"></i> HostoManager</span>
        </div>

        <div class="w-full sm:max-w-sm mt-6 px-6 py-4 overflow-hidden">
            <div>
                @if ($errors->any())
                <div class="mb-4">
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                        <div class="p-4 text-sm text-red-700 bg-red-100 rounded-lg text-center border-700">
                            {{ $error }}
                        </div>
                        @endforeach
                    </ul>
                </div>
                @endif

            </div>

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-input id="username" class="block mt-1 w-full border-black rounded-none" type="text"
                        placeholder="Nom utilisateur" name="username" :value="old('email')" required autofocus />
                </div>

                <div class="mt-6">
                    <x-jet-input id="password" class="block mt-1 w-full border-black rounded-none" type="password"
                        placeholder="Mot de passe" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-white">Se souvenir de moi</span>
                    </label>
                </div>

                <div class="mt-10">
                    <x-buttons.btn type="submit" class="w-full font-bold py-3 rounded-none">Connexion</x-buttons>
                </div>
            </form>
        </div>
    </div>



</x-guest-layout>