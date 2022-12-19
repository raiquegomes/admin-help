<x-app-layout>
    <x-slot name="header">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
    </x-slot>
    <x-slot name="subtitle">
        {{ __('Informações sobre o andamento de chamados, cadastro e etc.') }}
    </x-slot>

    <div class="page-content">
        <section class="row">
            {{-- INFORMAÇÕES EM CARDS --}}
            @livewire('utils.utils-cards-info')
            <div class="col-12 col-lg-3">
                {{-- PRODUTOS COM VECIMENTO PARA A DATA ATUAL --}}
                    @livewire('utils.utils-cards-team-users')
                </div>
            @livewire('task-list-form')
            @livewire('utils.utils-cards-products-losing')
            {{-- PRODUTOS COM VECIMENTO PARA A DATA ATUAL --}}
        </div>
    </div>
</x-app-layout>
