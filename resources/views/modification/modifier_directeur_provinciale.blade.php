@extends('layouts.app')

@section('content')
@include('menu_sidebar.menu_directeur_regionale')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> </div>

                <div class="card-body">
                    {{--  Formulaire de l'admin  --}}
                    <form method="POST" action='{{ route('directeurprv.update', ['id' => $pr->id]) }}'>
                        @csrf

                        <div class="form-group row">
                            <label for="nom_directeurprovinciale" class="col-md-4 col-form-label text-md-right">{{ __('Nom :') }}</label>
                            <div class="col-md-6">
                                <input id="nom_directeurprovinciale" type="text" class="form-control @error('nom_directeurprovinciale') is-invalid @enderror" name="nom_directeurprovinciale" value="{{  $pr->nom_directeurprovinciale }}" autocomplete="nom_directeurprovinciale" autofocus>

                                @error('nom_directeurprovinciale')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom_directeurprovinciale" class="col-md-4 col-form-label text-md-right">{{ __('Prenom :') }}</label>
                            <div class="col-md-6">
                                <input id="prenom_directeurprovinciale" type="text" class="form-control @error('prenom_directeurprovinciale') is-invalid @enderror" name="prenom_directeurprovinciale" value="{{  $pr->prenom_directeurprovinciale }}" autocomplete="prenom_directeurprovinciale" autofocus>

                                @error('prenom_directeurprovinciale')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone :') }}</label>
                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{  $pr->telephone }}" autocomplete="telephone" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adresse_directeurprovinciale" class="col-md-4 col-form-label text-md-right">{{ __('Adresse :') }}</label>
                            <div class="col-md-6">
                                <input id="adresse_directeurprovinciale" type="text" class="form-control @error('adresse_directeurprovinciale') is-invalid @enderror" name="adresse_directeurprovinciale" value="{{  $pr->adresse_directeurprovinciale }}" autocomplete="adresse_directeurprovinciale" autofocus>

                                @error('adresse_directeurprovinciale')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right"> </label>
                            <div class="col-md-6">
                                <input type="hidden" id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $pr->role }}" autocomplete="role" autofocus>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $pr->email }}" autocomplete="email">
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
                                @foreach ($aref as $ar)
                                @if ($ar->id == $pr->id_academies_fk)
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
                            <div class="col-md-6">
                               <input hidden id="id_affectation_fk" type="text" class="form-control @error('id_affectation_fk') is-invalid @enderror" name="id_affectation_fk" value="{{ Auth::guard('directeur_reg')->user()->affectation }}" autocomplete="id_affectation_fk" autofocus>

                               @error('id_affectation_fk')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $pr->password }}"  autocomplete="new-password">
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
