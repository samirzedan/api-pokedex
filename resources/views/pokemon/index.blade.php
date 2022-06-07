<x-layout title="Pokedex">
    <a href="{{ route('pokemon.create') }}" class="btn btn-primary">Adicionar</a>
    <ul class="list-group">
        @foreach ($pokemons as $pokemon)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                {{ $pokemon->name }}
                <div class="ms-2">
                    @foreach ($pokemon->types as $type)
                    <x-type type="{{ $type->name }}" colorT="{{ $type->color_hex_t }}" colorB="{{ $type->color_hex_b }}" />
                    @endforeach
                </div>
            </div>
            <span class="d-flex">
                <form action="{{ route('pokemon.edit', $pokemon) }}" class="ms-3" method="GET">
                    @csrf
                    <button class="btn btn-primary btn-sm" style="margin-left: 15px;">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
