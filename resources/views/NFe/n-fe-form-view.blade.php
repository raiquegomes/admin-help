<section class="section">
    <div class="card">
        <div class="card-header">
            Registos de Chamados
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            N°
                        </th>
                        <th>
                            CHAVE DE ACESSO
                        </th>
                        <th>
                            Data do Recebimento
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                           AÇÕES
                        </th>
                    </tr>
                </thead>
                <tbody>

                @foreach($nfe as $nfs)
                    <tr>
                        <td>{{ $nfs->id }}</td>
                        <td>{{ $nfs->access_key }}</td>
                        <td>{{ $nfs->created_at->format('d/m/y') }} ás {{ $nfs->created_at->format('H:i:s') }}</td>
                        <td>@if ($nfs->entry == 0) 
                            <span class="badge bg-danger">Sem entrada</span> 
                        @else
                            <span class="badge bg-success">Entrada Relizada</span> 
                        @endif
                        </td>
                        <td>
                            @if(Auth::user()->current_team_id == 1)
                                @if($nfs->entry == 0)
                                    <button wire:click="entry({{$nfs->id}})" class="btn icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="ENTRADA CONCLUIDA" wire:click="view({{ $nfs->id }})">
                                        <i class="bi bi-shield-check"></i>
                                    </button>
                                @endif
                            @endif
                            @if(Auth::user()->current_team_id == 5)
                                <button wire:click="delete({{$nfs->id}})" class="btn icon btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETAR NOTA" wire:click="view({{ $nfs->id }})">
                                    <i class="bi bi-trash"></i>
                                </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>