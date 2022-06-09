<div class="row">
    <div class="col-3">
        {{ $nome }}
    </div>
    <div class="col-9">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ ($porcentagem*100)/150 }}%" aria-valuenow="{{ $porcentagem }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>
