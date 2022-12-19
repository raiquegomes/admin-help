<x-jet-form-section submit="store">
    <x-slot name="title">
        {{ __('Inserimento de Cortes nos Registros') }}
    </x-slot>

    <x-slot name="form">
      <div class="col-md-4">
        <x-jet-label value="{{ __('ID do Produto')}}" />
      </div>
      <div class="col-md-8">
        <div class="form-group has-icon-left">
          <div class="position-relative">
            <x-jet-input type="text" name="searchProduct" id="searchProduct" wire:model="searchProduct" placeholder="ID Codigo" class="form-control" />
            <div class="form-control-icon">
              <i class="bi bi-code"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <x-jet-label value="{{ __('Quantidade')}}" />
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <div class="input-group mb-3">
            <x-jet-input type="number" name="qty" id="qty" placeholder="Quantidade" autocomplete="qty" wire:model="qty" class="form-control" />
            <button type="submit" class="btn btn-primary">Adicionar Item</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <x-jet-label value="{{ __('Codigo de Barra')}}" />
      </div>
      <div class="col-md-8">
        <div class="form-group has-icon-left">
          <div class="position-relative">
            <x-jet-input type="text" name="ean" id="ean" value="{{ $ean }}" placeholder="Codigo de Barra" class="form-control" readonly/>
            <div class="form-control-icon">
              <i class="bi bi-upc-scan"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <x-jet-label value="{{ __('Filial')}}" />
      </div>
      <div class="col-md-8">
        <div class="form-group has-icon-left">
          <div class="position-relative">
            <select id="filial" name="filial" class="form-control" wire:model="filial">
              <option>Selecione uma Filial</option>
              <option value="1">Supermercado P&F</option>
              <option value="2">Supermercado A&E</option>
          </select>
          <x-jet-input-error for="filial" class="mt-2" />
            <div class="form-control-icon">
              <i class="bi bi-shop"></i>
            </div>
          </div>
        </div>
      </div>
          <div class="col-span-6">
            <label class="block text-sm font-medium text-gray-700">Esse serviço e usado apenas para o setor de controle de corte. Todos os items colocados já devem ter passado por verificação do relatorio do sistema.</label>
          </div>
        </div>
    </x-slot>
</x-jet-form-section>
