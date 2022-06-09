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
    <div class="row d-flex justify-content-center">
        @foreach ($pokemons as $pokemon)
        <div class="card col-auto m-2 px-3 text-center text-dark bg-transparent-10" style="width: 14rem;">
            <img src="{{ $pokemon->getImage(1, $pokemon->numero) }}" class="card-img-top" alt="{{ $pokemon->name }}">
            <div class="card-body mb-3 bg-light rounded">
            <h5 class="card-title">{{ $pokemon->name }}</h5>
            <p class="card-text">
                @foreach ($pokemon->types as $type)
                <x-type type="{{ $type->name }}" colorT="{{ $type->color_hex_t }}" colorB="{{ $type->color_hex_b }}" />
                @endforeach
            </p>
            <a href="{{ route('pokemon.edit', $pokemon) }}" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="{{ route('pokemon.card', $pokemon->numero) }}" class="btn btn-primary btn-sm">Ver mais</a>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Navegação Entre Páginas -->
    <div class="row justify-content-md-center mt-3">
        <div class="col-auto">
          {{ $pokemons->links() }}
        </div>
    </div>
</x-layout>
