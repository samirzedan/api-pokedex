<x-layout title="{{ $pokemon->name }}">
    <div class="row">
        <div class="col">
            <a href="{{ route('pokemon.index') }}" class="btn btn-primary my-2"><i class="fa-solid fa-arrow-left"></i></a>
            <a href="{{ route('pokemon.edit', $pokemon) }}" class="btn btn-primary my-2 ms-2">Editar</a>
        </div>
    </div>
    <div class="container row my-3 py-4 px-4 rounded text-light bg-transparent-10">
        <div class="col-2 ps-0 pe-3">
            <img
                src="{{ $pokemon->getImage(1, $pokemon->numero) }}"
                alt="{{ $pokemon->name }}"
                class="w-100"
            >
        </div>
        <div class="col-6 bg-light text-dark rounded p-2">
            <x-status-pokemon nome="HP" valor="{{ $pokemon->hp }}"/>
            <x-status-pokemon nome="Attack" valor="{{ $pokemon->attack }}"/>
            <x-status-pokemon nome="Defense" valor="{{ $pokemon->defense }}"/>
            <x-status-pokemon nome="Sp. Attack" valor="{{ $pokemon->special_attack }}"/>
            <x-status-pokemon nome="Sp. Defense" valor="{{ $pokemon->special_defense }}"/>
            <x-status-pokemon nome="Speed" valor="{{ $pokemon->speed }}"/>
        </div>
    </div>
</x-layout>
