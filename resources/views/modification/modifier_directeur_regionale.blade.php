@extends('layouts.authreg')

@section('content')

@include('menu_sidebar.menu_directeur_regionale')

<div class="container">

<div class="card text-center mx-4">
    <div class="card-header">
      <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('profile.directeur_regionale', Auth::guard('directeur_reg')->user()->id) }}"> <i class="fas fa-user-circle"></i> Voir Votre Profile</a>
        </li>

      </ul>
    </div>

    <div class="card-body" id="profile">

    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card-body">
                    {{-- Formulaire de l'admin  --}}
                    <form method="POST" action='{{ route('directeur_regionale.update', ['id' => $reg->id]) }}' aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="prenom_directeurregional" class="col-md-4 col-form-label text-md-right">{{ __('Prenom : ') }}</label>
                            <div class="col-md-6">
                                <input id="prenom_directeurregional" type="text" class="form-control @error('prenom_directeurregional') is-invalid @enderror" name="prenom_directeurregional" value="{{ $reg->prenom_directeurregional }}" autocomplete="prenom_directeurregional" autofocus>

                                @error('prenom_directeurregional')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nom_directeurregional" class="col-md-4 col-form-label text-md-right">{{ __('Nom : ') }}</label>
                            <div class="col-md-6">
                                <input id="nom_directeurregional" type="text" class="form-control @error('nom_directeurregional') is-invalid @enderror" name="nom_directeurregional" value="{{ $reg->nom_directeurregional }}" autocomplete="nom_directeurregional" autofocus>

                                @error('nom_directeurregional')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address : ') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $reg->email }}" autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone :') }}</label>
                            <div class="col-md-6">
                                <input id="telephone" type="telephone" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{$reg->telephone}}" autocomplete="telephone">
                                @error('telephone')
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
                                        @foreach ($aref as $ar)
                                        @if ($ar->id == $reg->id_academies_fk)
                                        <option value="{{$ar->id}}" selected>{{$ar->nomacademies}}</option>
                                        @else
                                        <option value="{{$ar->id}}">{{$ar->nomacademies}}</option>
                                        @endif
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
                                            <select class="form-control" name="id_directions_fk" id="id_directions_fk">
                                                @foreach ($direction as $dr)
                                                <option value="{{$dr->id}}" selected>{{$dr->nomdirectionprovinciale}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>


                        <div class="form-group row">
                            <label for="adresse_directeurregional" class="col-md-4 col-form-label text-md-right">{{ __('Adresse :') }}</label>
                            <div class="col-md-6">
                                <input id="adresse_directeurregional" type="adresse_directeurregional" class="form-control @error('adresse_directeurregional') is-invalid @enderror" name="adresse_directeurregional" value="{{  $reg->adresse_directeurregional }}" autocomplete="adresse_directeurregional">
                                @error('adresse_directeurregional')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$reg->password}}" autocomplete="new-password">
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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <input id="role" type="hidden" class="form-control @error('role') is-invalid @enderror" name="role" value="{{$reg->role}}" autocomplete="telephone">
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="affectation" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <input id="affectation" type="hidden" class="form-control @error('affectation') is-invalid @enderror" name="affectation" value="{{$reg->affectation}}" autocomplete="affectation">
                                @error('affectation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>


    <div class="card-header text-center">
        La date d'aujourd'huit :


        <?php

          $datetime = date("Y-m-d H:i:s");
         echo $datetime;
            ?>

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


