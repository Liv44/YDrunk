<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} ADMIN | Bienvenue : {{Auth::guard('admin')->user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('alcoolstype.index')}}">Liste des types d'Alcools</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('alcools.index')}}">Liste des Alcools</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('softs.index')}}">Liste des Softs</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('sirops.index')}}">Liste des Sirops</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">

                <a href="{{ route('glasses.index')}}">Liste des Verres</a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
