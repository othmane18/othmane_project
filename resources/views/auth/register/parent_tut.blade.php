@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($tuteur) ? ucwords($tuteur) : ""}} {{ __('Register') }}</div>

                <div class="card-body">
                    {{--  Formulaire de l'admin  --}}
                    <form method="POST" action='{{ url("register/parent_tut") }}' aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom_parent" class="col-md-4 col-form-label text-md-right">{{ __('Nom enseignant') }}</label>
                            <div class="col-md-6">
                                <input id="nom_parent" type="text" class="form-control @error('nom_parent') is-invalid @enderror" name="nom_parent" value="{{ old('nom_parent') }}" autocomplete="nom_parent" autofocus>

                                @error('nom_parent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_parent" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email_parent" type="email" class="form-control @error('email_parent') is-invalid @enderror" name="email_parent" value="{{ old('email_parent') }}"  autocomplete="email_parent">
                                @error('email_parent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
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
