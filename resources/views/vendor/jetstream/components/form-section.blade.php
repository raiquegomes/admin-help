@props(['submit'])

<section {{ $attributes->merge(['class' => 'section']) }}>
    <div class="card">
        <x-jet-section-title>
            <x-slot name="title">{{ $title }}</x-slot>
        </x-jet-section-title>

        <div class="card-content">
        @if (session()->has('message'))
            <div class="alert alert-primary" role="alert">
                <span class="font-medium"><b>Tudo certo!</b></span> {{ session('message') }}
            </div>
        @endif
        @if (session()->has('info'))
            <div class="alert alert-danger" role="alert">
                <span class="font-medium"><b>Ooh!</b></span> {{ session('info') }}
            </div>
        @endif
            <div class="card-body">
                <form class="form form-horizontal" wire:submit.prevent="{{ $submit }}">
                    <div class="form-body">
                        <div class="row">
                            {{ $form }}

                            @if (isset($actions))
                                <div class="col-12 d-flex justify-content-end">
                                    {{ $actions }}
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
