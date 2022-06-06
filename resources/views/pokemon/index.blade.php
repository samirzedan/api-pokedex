<x-layout title="Pokedex">
    <a href="{{ route('pokemon.create') }}" class="btn btn-primary">Adicionar</a>
    <ul class="list-group">
        @foreach ($pokemons as $pokemon)
        <li class="list-group-item d-flex justify-content-between align-items-center border border-secondary">
            <div class="d-flex align-items-center">
                {{ $pokemon->name }}
            </div>
            <span class="d-flex">
                <form action="{{ route('pokemon.destroy', $pokemon->id) }}" class="ms-3" method="POST">
                    @csrf
                    <a href="{{ route('pokemon.edit', $pokemon->id) }}" class="btn btn-primary btn-sm" style="margin-left: 15px;">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
