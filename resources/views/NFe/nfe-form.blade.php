<x-jet-form-section submit="store">
    <x-slot name="title">
        {{ __('NFe') }}
    </x-slot>

<x-slot name="form">    
    <div class="col-md-4">
        <x-jet-label value="{{ __('CHAVE DE ACESSO DA NF-E')}}" />
    </div>
    <div class="col-md-8">
        <div class="form-group @error('access_key') is-invalid @enderror">
            <div class="input-group mb-3">
                <x-jet-input type="text" name="access_key" id="access_key" wire:model="access_key" placeholder="Insira a chave de acesso da NFe" class="form-control" />
                <button type="submit" class="btn btn-primary">Adicionar NFe</button>
            </div>
            <x-jet-input-error for="access_key" />
        </div>
    </div>
</x-slot>

</x-jet-form-section>
