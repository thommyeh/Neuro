@extends('layout.app')

@section('content')
<div class="container column is-8">
    @component('components.full-page-section')



        @component('components.card')
            @slot('title')
                {{ __('Connexion') }}
            @endslot

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <label class="label" for="email">{{ __('Adresse e-mail') }}</label>
                    <div class="control">
                        <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password">{{ __('Mot de passe') }}</label>
                    <div class="control">
                        <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password" autofocus>
                    </div>
                    @error('password')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="control">
                    <label tabindex="0" class="b-checkbox checkbox is-thin">
                        <input type="checkbox" true-value="true" value="false" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="check is-black"></span>
                        <span class="control-label">{{ __('Se souvenir de moi') }}</span>
                    </label>
                </div>

                <hr>

                <div class="field is-form-action-buttons">
                    <button type="submit" class="button is-link">
                        {{ __('Se connecter') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="button is-text" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                    @endif
                </div>
            </form>
        @endcomponent
    @endcomponent
</div>
@endsection
