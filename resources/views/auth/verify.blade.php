@extends('layout.app')

@section('content')
    @component('components.full-page-section')

        @if (session('resent'))
            <div class="notification is-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        @component('components.card')
            @slot('title')
                {{ __('Verifiez votre adresse e-mail') }}
            @endslot

            <div class="content">
                <p>
                    {{ __('Veuillez valider votre adresse e-mail avant de continuer') }}
                </p>
                <p>
                    {{ __("Si vous n'avez pas reçu l'e-mail") }}, <a href="{{ route('verification.resend') }}">{{ __('cliquez ici pour en recevoir un nouveau') }}</a>.
                </p>
            </div>
        @endcomponent
    @endcomponent
@endsection
