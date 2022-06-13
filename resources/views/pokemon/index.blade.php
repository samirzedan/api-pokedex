<x-layout title="Pokedex">
    <!-- Form para Pesquisa -->
    <!--<form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="search" id="search" class="form-control" placeholder="Pokemon Name" aria-label="Pokemon Name" aria-describedby="search">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary" title="Pesquisar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </form>-->
    <!-- Botão "Adicionar" -->
    <a href="{{ route('pokemon.create') }}" class="btn btn-primary mt-2 mb-3" title="Adicionar">Adicionar</a>
    <!-- Navegação Entre Páginas -->
    <div class="row justify-content-md-center">
        <div class="col-auto">
            {{ $pokemons->links() }}
        </div>
    </div>
    <!-- Lista de Pokemons -->
    <ul class="list-group">
        @foreach ($pokemons as $pokemon)
        <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <div class="fs-6">
                    <span class="badge bg-secondary">N° {{ $pokemon->numero }}</span>
                </div>
                <a href="{{ route('pokemon.card', $pokemon->numero) }}" class="text-decoration-none text-dark">
                    <img
                    src="{{ $pokemon->getImage(3, $pokemon->numero) }}"
                    alt="{{ $pokemon->name }}"
                    >
                </a>
                <a href="{{ route('pokemon.card', $pokemon->numero) }}" class="text-decoration-none text-dark">
                    {{ $pokemon->name }}
                </a>
                <div class="ms-3">
                    @foreach ($pokemon->types as $type)
                    <x-type type="{{ $type->name }}" colorT="{{ $type->color_hex_t }}" colorB="{{ $type->color_hex_b }}" />
                    @endforeach
                </div>
            </div>
            <span class="d-flex">
                <a href="{{ route('pokemon.edit', $pokemon) }}" class="btn btn-outline-primary btn-sm ms-3"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="{{ route('pokemon.card', $pokemon->numero) }}" class="btn btn-primary btn-sm ms-3"><i class="fa-solid fa-eye"></i></a>
            </span>
        </li>
        @endforeach
    </ul>
    <!-- Navegação Entre Páginas -->
    <div class="row justify-content-md-center mt-3">
        <div class="col-auto">
          {{ $pokemons->links() }}
        </div>
    </div>
</x-layout>
