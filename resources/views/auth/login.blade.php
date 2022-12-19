<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <h1 class="auth-title">Conecte-se.</h1>
        <p class="auth-subtitle mb-5">Faça login com seus dados inseridos durante o registro.</p>
        
        <x-jet-validation-errors class="alert alert-warning" />

        @if (session('status'))
            <div class="alert alert-green">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf  
            <div class="form-group position-relative has-icon-left mb-4">
                <x-jet-input id="email" class="form-control form-control-xl" placeholder="Digite seu email" type="email" name="email" :value="old('email')" required autofocus />
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>

            <div  class="form-group position-relative has-icon-left mb-4">
                <x-jet-input id="password" class="form-control form-control-xl" type="password" placeholder="Digite sua senha" name="password" required autocomplete="current-password" />
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>

            <div class="form-check form-check-lg d-flex align-items-end">
                <x-jet-checkbox class="form-check-input me-2" id="remember_me" name="remember" />
                <x-jet-label value="{{ __('Mantenha-me conectado') }}" for="remember" />
            </div>

            <div class="form-check form-check-lg d-flex align-items-end">
                <x-jet-button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                    {{ __('Logar') }}
                </x-jet-button>
            </div>

            <div class="text-center mt-5 text-lg fs-4">
                @if (Route::has('password.request'))
                <p><a class="font-bold" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a></p>
                @endif
                <p class="text-gray-600">Não tem uma conta? <a href="{{ route('register') }}" class="font-bold">Registrar-se</a>.</p>
            </div>

        </form>
    </x-jet-authentication-card>
</x-guest-layout>
