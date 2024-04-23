<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un département') }}
        </h2>
    </x-slot>

    <form action="{{ route('departement.update', ['departement' => $departement->id]) }}" method="post">
        @csrf
        @method ('PUT')

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Department Name -->
                        <div class="mt-4">
                            <x-input-label for="nom_dep" :value="__('Nom du département')" />
                            <x-text-input id="nom_dep" class="block mt-1 w-full" type="text" name="nom_dep" :value="$departement->nom_dep" required autofocus autocomplete="nom_dep" />
                            <x-input-error :messages="$errors->get('nom_dep')" class="mt-2" />
                        </div>

                        <!-- Department Code -->
                        <div class="mt-4">
                            <x-input-label for="code_dep" :value="__('Code du département')" />
                            <x-text-input id="code_dep" class="block mt-1 w-full" type="text" name="code_dep" :value="$departement->code_dep" required autocomplete="code_dep" />
                            <x-input-error :messages="$errors->get('code_dep')" class="mt-2" />
                        </div>

                        <!-- Direction Code -->
                        <div class="mt-4">
                            <x-input-label for="code_dir" :value="__('Code de la direction de tutelle')" />
                            <x-text-input id="code_dir" class="block mt-1 w-full" type="text" name="code_dir" :value="$departement->code_dir" required autocomplete="code_dir" placeholder="Ce sera changer en selectBox" />
                            <x-input-error :messages="$errors->get('code_dir')" class="mt-2" />
                        </div>

                        <div class="mt-4 float-right p-2">
                            <x-primary-button>{{ __('Modifier') }}</x-primary-button>
                        </div>

                        <div class="mt-4 float-right p-2">
                            <a href="{{ route('departement.index') }}">
                                <x-secondary-button>
                                    {{ __('Retour') }}
                                </x-secondary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
