<div class="row">
    <div class="col-3">
        {{ $nome }}
    </div>
    <div class="col-9">
        <div class="progress mt-1">
            <div class="progress-bar" role="progressbar" style="width: {{ ($valor*100)/150 }}%" aria-valuenow="{{ $valor }}" aria-valuemin="0" aria-valuemax="100">{{ $valor }}</div>
        </div>
    </div>
</div>
