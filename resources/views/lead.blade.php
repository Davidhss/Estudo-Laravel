<x-layout>
    <x-slot:heading>
        Lead
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{$lead['nome']}}</h2>

    <ul>
        <li>Situação: {{$lead['situacao']}}</li>
        <li>Celular: {{$lead['celular']}}</li>
    </ul>
</x-layout>
