<x-app-layout>
    <link href="../../public/css/campo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sua biblioteca pessoal.') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teste.') }}
        </h2>
        <title>Biblioteca</title>
        <style type="text/css">
            .py-12 {
                background-image: linear-gradient(#20434b, #d9bf);
                height: 100vh;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bem-vindo!") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("Olá!") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("Teste.") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
