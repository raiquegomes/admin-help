<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chamados') }}
        </h2>
    </x-slot>
    <x-slot name="subtitle">
        {{ __('Aqui se encontra todos os chamados abertos e fechados.') }}
    </x-slot>
    <div>
            @livewire('open-call-suport-form')
            <x-jet-section-border />
            
            @livewire('view-call-support-form')
            <x-jet-section-border />
    </div>
</x-app-layout>
