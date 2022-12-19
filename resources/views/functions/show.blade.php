<x-app-layout>
    <x-slot name="header">
            {{ __('Cortes') }}
    </x-slot>
    <x-slot name="subtitle">
        {{ __('Essa e uma função para registro de cortes dentro de certo prazo.') }}
    </x-slot>
    <div>
            @livewire('cut-into-products')
            <x-jet-section-border />


    </div>
</x-app-layout>
