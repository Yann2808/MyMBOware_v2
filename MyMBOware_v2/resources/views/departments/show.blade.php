<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails du département') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="center">Détails du département <b>{{$departement->nom_dep}}</b></h2>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col mt-4">
                                Nom du département : 
                            </div>
                            <div class="col mt-4">
                                {{ $departement->nom_dep }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mt-4">
                                Code du département : 
                            </div>
                            <div class="col mt-4">
                                {{ $departement->code_dep }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mt-4">
                                Direction de tutelle : 
                            </div>
                            <div class="col mt-4">
                                {{ $departement->code_dir }}
                            </div>
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
    </div>
</x-app-layout>
