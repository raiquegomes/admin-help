<section class="section">
    <div class="card">
        <div class="card-header">
            Registos de Chamados
        </div>
        <div class="card-body">
            <table class="table table-striped disabled">
                <thead>
                    <tr>
                        <th>
                            N°
                        </th>
                        <th>
                            Filial
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Motivo
                        </th>
                        <th>
                            Operador
                        </th>
                        <th>
                            Ultima Atualização
                        </th>
                        <th>
                           AÇÕES
                        </th>
                    </tr>
                </thead>
                <tbody>

                @foreach($tickets as $ticket)
                    <tr>
                        <th>
                            {{ $ticket->id }}
                        </th>
                        <td >
                        @if ($ticket->filial === 1) 
                            <span class="badge bg-primary">(P&F)</span> 
                        @else
                            <span class="badge bg-warning">(A&E)</span> 
                        @endif
                        </td>
                        <td>
                        @if($ticket->status === 0) 
                            <span class="badge bg-success">Aberto</span> 
                        @else 
                            <span class="badge bg-danger">Fechado</span> 
                        @endif
                        </td>
                        <td>
                            @if($ticket->motived == 1) Promoção de Validade @endif @if($ticket->motived == 2) Remover produto da promoção @endif @if($ticket->motived == 3) Inconsistência de valor de produto @endif @if($ticket->motived == 4) Duvida sobre produto @endif
                        </td>
                        <th>
                                <div class="d-flex align-items-center">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        @if($ticket->user->profile_photo_path == true)
                                            <div class="avatar avatar-md">
                                                <img src="/storage/{{ $ticket->user->profile_photo_path }}" alt="{{ $ticket->user->name }}">
                                            </div>
                                        @endif
                                    @endif
                                    <p class="font-bold ms-3 mb-0">{{ $ticket->user->name }}</p>
                                </div> 
                        </th>
                        <td>
                            {{ $ticket->updated_at->format('d/m/y') }} ás {{ $ticket->updated_at->format('H:i:s') }}
                        </td>
                        <td>
                            <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#large" wire:click="view({{ $ticket->id }})">
                                <i class="bi bi-pencil"></i>
                            </button>
                            @if(Auth::user()->current_team_id == 1 && $ticket->status == 0)
                            <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Fechar o Chamado" class="btn icon btn-danger" wire:click="close({{ $ticket->id }})">
                                <i class="bi bi-shield-check"></i>
                            </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $tickets->links() }}
            @include('tickets.view-call-support-modal')
    </div>
</div>