<div class="card">
    <div class="card-header">
        <h4>Atendimento</h4>
    </div>
    <div class="card-content pb-4">

        @foreach($teams as $team)
        <div class="recent-message d-flex px-4 py-3">
            @if($team->profile_photo_path == true)
            <div class="avatar avatar-lg">
                <img src="/storage/{{ $team->profile_photo_path }}">
            </div>
            @endif
            <div class="name ms-4">
                <h5 class="mb-1">{{ $team->name }}</h5>
                <h6 class="text-muted mb-0">Cadastro</h6>
            </div>
        </div>
        @endforeach
        <div class="px-4">
            <a href="{{ route('chamado') }}" class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Abrir Chamado</a>
        </div>
    </div>
</div>