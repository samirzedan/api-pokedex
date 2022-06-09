<x-layout title="{{ $pokemon->name }}">
    <a href="{{ URL::previous() }}" class="btn btn-primary mb-2"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="container">
        <img
            src="{{ $pokemon->getImage(1, $pokemon->numero) }}"
            alt="{{ $pokemon->name }}"
            style="width: 20%"
        >
    </div>
</x-layout>
