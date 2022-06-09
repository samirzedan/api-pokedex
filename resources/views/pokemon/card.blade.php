<x-layout title="{{ $pokemon->name }}">
    <a href="{{ URL::previous() }}" class="btn btn-primary my-2"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="container my-3 py-4 px-4 rounded bg-transparent-10">
        <img
            src="{{ $pokemon->getImage(1, $pokemon->numero) }}"
            alt="{{ $pokemon->name }}"
            style="width: 20%"
        >
    </div>
</x-layout>
