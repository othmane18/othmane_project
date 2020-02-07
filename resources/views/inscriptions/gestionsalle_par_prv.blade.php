@extends('layouts.authprv')

@section('content')

@include('menu_sidebar.menu_directeur_provinciale')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    {{--  Formulaire de l'admin  --}}
                    <form method="POST" action='{{ url("ajouter/gestion_prv") }}'>
                        @csrf

                        <div class="form-group row">
                            <label for="nom_gestionsalle" class="col-md-4 col-form-label text-md-right">{{ __('Nom :') }}</label>
                            <div class="col-md-6">
                                <input id="nom_gestionsalle" type="text" class="form-control @error('nom_gestionsalle') is-invalid @enderror" name="nom_gestionsalle" value="{{ old('nom_gestionsalle') }}" autocomplete="nom_gestionsalle" autofocus>

                                @error('nom_gestionsalle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="prenom_gestionsalle" class="col-md-4 col-form-label text-md-right">{{ __('Prenom :') }}</label>
                            <div class="col-md-6">
                                <input id="prenom_gestionsalle" type="text" class="form-control @error('prenom_gestionsalle') is-invalid @enderror" name="prenom_gestionsalle" value="{{ old('prenom_gestionsalle') }}" autocomplete="prenom_gestionsalle" autofocus>

                                @error('prenom_gestionsalle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adresse_gestionsalle" class="col-md-4 col-form-label text-md-right">{{ __('Adresse :') }}</label>
                            <div class="col-md-6">
                                <input id="adresse_gestionsalle" type="text" class="form-control @error('adresse_gestionsalle') is-invalid @enderror" name="adresse_gestionsalle" value="{{ old('adresse_gestionsalle') }}" autocomplete="adresse_gestionsalle" autofocus>

                                @error('adresse_gestionsalle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label text-md-right">{{ __('AREF :') }}</label>
                                    <div class="col-md-6">
                                        <select id="id_academies_fk" type="id_academies_fk" class="form-control @error('id_academies_fk') is-invalid @enderror" name="id_academies_fk" value="{{ old('') }}" autocomplete="">
                                        <option value="">---</option>
                                        @foreach ($aref as $a)
                                        <option value="{{$a->id}}" >{{$a->nomacademies}}</option>
                                            @endforeach
                                        </select>
                                            @error('id_academies_fk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div id="get_directions_select">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right">Direction Provinciale :</label>
                                            <div class="col-md-6">
                                                <select disabled class="form-control">

                                                <option value="---">---</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                       <input hidden id="id_dirprovinciale_fk" type="text" class="form-control @error('id_dirprovinciale_fk') is-invalid @enderror" name="id_dirprovinciale_fk" value="{{ Auth::guard('directeur_prov')->user()->id }}" autocomplete="id_dirprovinciale_fk" autofocus>

                                       @error('id_dirprovinciale_fk')
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {



    // DIRECTIONS //

        $('#id_academies_fk').on('change', function () {

                console.log($("#id_academies_fk option:selected").val());

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                id_aref = $("#id_academies_fk option:selected").val();

        $.ajax({
                    url: "{{ url('/') }}" + "/get_directions/" + id_aref,
                    method: 'get',
                    success: function (result) {
                        console.log(result);
                        $('#get_directions_select').html(result);
                    },
                    error: function (result) {
                        console.log("test");
                    },
                });

            });
    });

</script>


@endsection
