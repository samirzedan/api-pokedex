<x-layout title="Cadastro">
    <form action="{{ route('pokemon.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-2">
                <label for="numero" class="form-label">Número</label>
                <input type="number" id="numero" name="numero" class="form-control" value="{{ $proximoNumero }}">
            </div>
            <div class="col-10">
                <label for="name" class="form-label">Name</label>
                <input type="text" autofocus id="name" name="name" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="hp" class="form-label">HP</label>
                <input type="number" id="hp" name="hp" class="form-control">
            </div>
            <div class="col-2">
                <label for="attack" class="form-label">Attack</label>
                <input type="number" id="attack" name="attack" class="form-control">
            </div>
            <div class="col-2">
                <label for="defense" class="form-label">Defense</label>
                <input type="number" id="defense" name="defense" class="form-control">
            </div>
            <div class="col-2">
                <label for="special_attack" class="form-label">Special Attack</label>
                <input type="number" id="special_attack" name="special_attack" class="form-control">
            </div>
            <div class="col-2">
                <label for="special_defense" class="form-label">Special Defense</label>
                <input type="number" id="special_defense" name="special_defense" class="form-control">
            </div>
            <div class="col-2">
                <label for="speed" class="form-label">Speed</label>
                <input type="number" id="speed" name="speed" class="form-control">
            </div>
        </div>
        <div class="row mb-3" class="form-label">
            <div class="col-2">
                <label for="type_1" class="form-label">Type 1</label>
                <select name="type_1" id="type_1" class="form-select">
                    <option value="0" selected></option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <label for="type_2" class="form-label">Type 2</label>
                <select name="type_2" id="type_2" class="form-select">
                    <option value="0" selected></option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('pokemon.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</x-layout>
