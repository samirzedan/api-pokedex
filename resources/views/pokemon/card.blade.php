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
        <div class="col-4">
            @foreach ($pokemon->types as $type)
            <x-type type="{{ $type->name }}" colorT="{{ $type->color_hex_t }}" colorB="{{ $type->color_hex_b }}" />
            @endforeach
        </div>
    </div>
</x-layout>
