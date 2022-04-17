{{-- <x-base-layout class="wrap-login100">
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="login100-form validate-form">
            @csrf
            <span class="login100-form-logo">
                <img alt="" src="{{ asset('admin/img/logo-2.png') }}">
            </span>
            <span class="login100-form-title p-b-34 p-t-27">Log in</span>
            <div class="wrap-input100 validate-input" data-validate="Enter email">
                <x-jet-input class="input100 @error ('email') is-invalid @enderror" name="email" id="email" placeholder="Username*" value="{{ old('email') }}" type="text" autofocus required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <x-jet-input class="input100" name="password" id="password" placeholder="Password*" type="password" required>
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>
            <div class="contact100-form-checkbox">
                <x-jet-input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="ckb1">Remember me</label>
            </div>
            <div class="container-login100-form-btn">
                <button class="login100-form-btn" type="submit">Login</button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-base-layout> --}}

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Belum Punya Akun? Daftar') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Masuk') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
