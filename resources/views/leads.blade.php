<x-layout>
    <x-slot:heading>
        Lista de Leads
    </x-slot:heading>

    <ul>
        @foreach ($leads as $lead)
            <li>
                <a href="/leads/{{$lead['id']}}" class="hover:underline">
                    <strong class="text-red-600">{{$lead['nome']}}</strong> - {{$lead['celular']}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
