<x-jet-form-section submit="clear()">
    <x-slot name="title">
        {{ __('Importação') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Isso e ações administrativas para fins de controle.') }}
    </x-slot>

    <x-slot name="form">
        <div class="buttons">
            <a href="" id="txt_pf" class="btn btn-primary">EXPORTAR CORTES P&F (TXT)</a>

            <a href="" id="txt_ae" class="btn btn-primary">EXPORTAR CORTES A&E (TXT)</a>

            <button type="submit" class="btn btn-warning">LIMPAR CORTES</a>
        </div>
    </x-slot>

</x-jet-form-section>
