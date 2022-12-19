<x-jet-form-section submit="store">
    <x-slot name="title">
        {{ __('Abertura de Chamado') }}
    </x-slot>

    <x-slot name="form">


        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">Filial:</label>
                </div>
                <div class="col-lg-10 col-9">
                    <select id="filial" name="filial" class="form-select" wire:model="filial">
                        <option>Selecione o Motivo</option>
                        @foreach ($filial_all as $filials)
                            <option value="{{ $filials->id }}">{{ $filials->name }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="filial" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">Motivo:</label>
                </div>
                <div class="col-lg-10 col-9">
                    <select id="status_motived" name="status_motived" class="form-select" wire:model="status_motived">
                        <option>Selecione o Motivo</option>
                        <option value="1">Promoção de Validade</option>
                        <option value="2">Remover produto da promoção</option>
                        <option value="3">Inconsistência de valor de produto</option>
                        <option value="4">Duvida sobre produto</option>
                    </select>
                    <x-jet-input-error for="status_motived" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">Repositor:</label>
                </div>
                <div class="col-lg-10 col-9">
                    <x-jet-input id="responsavel" type="text" class="form-control" wire:model="responsavel" placeholder="Informe o nome do responsavel" />
                    <x-jet-input-error for="responsavel" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group row align-items-center">
                <div class="col-lg-2 col-3">
                    <label class="col-form-label">Departamento:</label>
                </div>
                <div class="col-lg-10 col-9">
                    <select id="section" name="section" class="form-select" wire:model="section">
                        <option>Selecione o Departamento</option>
                        @foreach ($team as $teams)
                            <option value="{{ $teams->id }}">{{ $teams->name }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="section" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="block text-sm font-medium text-gray-700">Informações sobre o chamado</label>
            <textarea id="description" name="description" rows="5" class="form-control" placeholder="Digite as informações do produto..." wire:model="description">
            </textarea>
            <x-jet-input-error for="description" class="mt-2" />
            <label class="block text-sm font-medium text-gray-700">OBS: Para chamados sobre produtos, informe codigo de barra, quantidade aproximada e a data de validade do produto. </label>
        </div>

    </x-slot>
    <x-slot name="actions">

        <div wire:loading wire:target="store">
            <div class="mb-2">
                <button class="btn btn-secondary" type="button" disabled="">
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Abrindo o chamado...
                </button>
            </div>
        </div>

        <x-jet-button wire:loading.remove wire:target="store">
            {{ __('Iniciar Chamado') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
