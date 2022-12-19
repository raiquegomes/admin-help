<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <h1 class="auth-title">Registrar-se</h1>
        <p class="auth-subtitle mb-5">Insira seus dados para se cadastrar em nosso site.</p>

        <x-jet-validation-errors class="alert alert-warning" />

        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group position-relative has-icon-left mb-4">
                <x-jet-input id="name" class="form-control form-control-xl" placeholder="Informe seu nome" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>

            <div class="form-group position-relative has-icon-left mb-4">
                <x-jet-input id="email" class="form-control form-control-xl" placeholder="Informe seu email" type="email" name="email" :value="old('email')" required />
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>

            <div class="form-group position-relative has-icon-left mb-4">
                <x-jet-input id="password" class="form-control form-control-xl" placeholder="Informe sua senha" type="password" name="password" required autocomplete="new-password" />
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>

            <div class="form-group position-relative has-icon-left mb-4">
                <x-jet-input id="password_confirmation" class="form-control form-control-xl" placeholder="Confirme sua senha" type="password" name="password_confirmation" required autocomplete="new-password" />
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="form-check form-check-lg d-flex align-items-end">
                    <x-jet-checkbox class="form-check-input me-2" name="terms" id="terms"/>
                    <x-jet-label class="form-check-label text-gray-600" for="terms">
                        {!! __('Eu concordo com o :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Termos de serviço').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Política de Privacidade').'</a>',
                        ]) !!}
                    </x-jet-label>
                </div>
            @endif


            <x-jet-button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                {{ __('Registrar') }}
            </x-jet-button>

            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Já tem uma conta?<a class="font-bold" href="{{ route('login') }}">
                    {{ __('Logar') }}
                </a></p>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
