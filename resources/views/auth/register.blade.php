@extends('layouts.app')

@section('content')
    @component('components.full-page-section')
        @component('components.card')
            @slot('title')
                {{ __('Register') }}
            @endslot

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="field">
                    <label class="label" for="email">{{ __('Name') }}</label>
                    <div class="control">
                        <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                    @error('name')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                    <div class="control">
                        <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                    <p class="help is-danger" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <div class="control">
                        <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="new-password" autofocus>
                    </div>
                    @error('password')
                    <p class="help is-danger" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password-confirm">{{ __('Confirm Password') }}</label>
                    <div class="control">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password" autofocus>
                    </div>
                </div>

                <hr>

                <div class="field is-form-action-buttons">
                    <button type="submit" class="button is-primary">
                        {{ __('Register') }}
                    </button>

                    <a class="button is-text" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </div>
            </form>

        @endcomponent
    @endcomponent

@endsection

@section('OLD')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
