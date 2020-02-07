@extends('layouts.authsalle')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil Salle</div>

                <div class="card-body">
                    {{ Auth::guard('salles')->user()->nom_salle . " " . Auth::guard('salles')->user()->capacite_parent}} 

                   <a href=""><i class="far fa-trash-alt"></i> </a> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection