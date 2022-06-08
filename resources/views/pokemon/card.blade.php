<x-layout title="{{ $pokemon->name }}">
    <img
        src="{{ $pokemon->getImage(1, $pokemon->numero) }}"
        alt="{{ $pokemon->name }}"
        style="width: 6%"
    >
    <img
        src="{{ $pokemon->getImage(2, $pokemon->numero) }}"
        alt="{{ $pokemon->name }}"
    >
    <img
        src="{{ $pokemon->getImage(3, $pokemon->numero) }}"
        alt="{{ $pokemon->name }}"
        class="w-25"
    >

</x-layout>
