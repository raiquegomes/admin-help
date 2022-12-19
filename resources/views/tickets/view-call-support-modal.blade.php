
<div wire:ignore.self class="modal fade text-left" aria-modal="true" id="large" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Informações do Ticket</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6>{{ __('Repositor') }}</h6>
                                    <input class="form-control" wire:model="ticket_operator" readonly />
                                </div>
                                <div class="col-sm-6">
                                    <h6>{{ __('Filial') }}</h6>
                                    <input class="form-control" wire:model="ticket_filial" readonly />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6>{{ __('Data da Abertura') }}</h6>
                                    <input class="form-control form-control-sm" wire:model="ticket_created" readonly />
                                </div>
                                <div class="col-sm-6">
                                    <h6>{{ __('Ultima Atualização') }}</h6>
                                    <input class="form-control form-control-sm" wire:model="ticket_updated" readonly />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6>{{ __('Departamento') }}</h6>
                                    <input class="form-control" wire:model="ticket_section" readonly />
                                </div>
                                <div class="col-sm-6">
                                    <h6>{{ __('Motivo da Abertura') }}</h6>
                                    <input class="form-control" wire:model="ticket_motived" readonly />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <h6>{{ __('Informações') }}</h6>
                                <textarea class="form-control" wire:model="ticket_description" rows="8" readonly></textarea>
                            </div>   
                            <div class="col-sm-6">
                                <h6>{{ __('Atendimento realizado por:') }}</h6>
                                <input class="form-control" wire:model="ticket_setor_operation" readonly />
                            </div>                
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button wire:click="closeModalPopover()" type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Voltar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>