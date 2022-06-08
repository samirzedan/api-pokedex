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
    <a href="{{ route('pokemon.create') }}" class="btn btn-primary mb-3" title="Adicionar">Adicionar</a>
    <!-- Lista de Pokemons -->
    <ul class="list-group">
        @foreach ($pokemons as $pokemon)
        <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <div class="me-2 fs-6">
                    <span class="badge bg-secondary">N° {{ $pokemon->numero }}</span>
                </div>
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
                    <button class="btn btn-primary btn-sm" style="margin-left: 15px;" title="Editar">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
    <!-- Navegação Entre Páginas -->
    <div class="row justify-content-md-center">
        <div class="col-auto">
          {{ $pokemons->links() }}
        </div>
    </div>
</x-layout>
