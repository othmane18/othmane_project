 
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">  

                        <div class="card-body">
                                @if(count($errors)>0)
                                <ul class="navbar-nav mr-auto">
                                        @foreach ($errors->all() as $erro)
                                        <li class="nav-item active">
                                               {{$erro}}
                                              </li>
                                        @endforeach       
                                </ul>    
                                @endif
                        <form action="{{route('etablissement.update' , ['id'=> $etat->id])}}" method="POST"> 
                            {{ csrf_field() }}
                                        <div class="form-group">
                                        <label for="libelle_etablissement">Nom Etablissement : </label>
                                        <input type="text" class="form-control" name="libelle_etablissement" value="{{$etat->libelle_etablissement}}">
                                        </div>
    
                                         <div class="form-group">
                                        <label for="type_etablissement">Example select</label>
                                        <select class="form-control" name="type_etablissement" value="{{$etat->type_etablissement}}">
                                        <option>Ecole Primaire</option>
                                        <option>Collège  </option>
                                        <option>Lycée</option> 
                                        </select>
                                         </div>
    
                                        <div class="form-group">
                                        <label for="code_grisa">Code Grisa : </label>
                                        <input type="text" class="form-control" name="code_grisa" value="{{$etat->code_grisa}}">
                                        </div>
    
                                        <div class="form-group">
                                        <label for="ville_etablissement">Ville Etablissement : </label>
                                        <input type="text" class="form-control" name="ville_etablissement" value="{{$etat->ville_etablissement}}">
                                        </div>
    
                                        <div class="form-group">
                                        <label for="adresse_etablissement">Adresse Etablissement : </label>
                                        <input type="text" class="form-control" name="adresse_etablissement" value="{{$etat->adresse_etablissement}}">
                                        </div>
    
                                        <div class="form-group">
                                        <label for="telephone_etablissement">Telephone Etablissement : </label>
                                        <input type="text" class="form-control" name="telephone_etablissement" value="{{$etat->telephone_etablissement}}">
                                        </div> 
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                            </div>

                          

                </div>
            </div>
        </div>
    </div>
    @endsection