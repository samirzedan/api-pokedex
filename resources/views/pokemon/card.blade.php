<x-layout title="{{ $pokemon->name }}">
    <a href="{{ URL::previous() }}" class="btn btn-primary my-2"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="container row my-3 py-4 px-4 rounded text-light bg-transparent-10">
        <div class="col-2">
            <img
                src="{{ $pokemon->getImage(1, $pokemon->numero) }}"
                alt="{{ $pokemon->name }}"
                class="w-100"
            >
        </div>
        <div class="col-6 bg-light text-dark rounded p-2">
            <x-status-pokemon nome="HP" porcentagem="{{ $pokemon->hp }}"/>
            <x-status-pokemon nome="Attack" porcentagem="{{ $pokemon->attack }}"/>
            <x-status-pokemon nome="Defense" porcentagem="{{ $pokemon->defense }}"/>
            <x-status-pokemon nome="Sp. Attack" porcentagem="{{ $pokemon->special_attack }}"/>
            <x-status-pokemon nome="Sp. Defense" porcentagem="{{ $pokemon->special_defense }}"/>
            <x-status-pokemon nome="Speed" porcentagem="{{ $pokemon->speed }}"/>
        </div>
    </div>
</x-layout>
