 
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
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
                        <form action="{{route('niveauscolaire.store' )}}" method="POST"> 
                            {{ csrf_field() }}
                                        <div class="form-group">
                                        <label for="libelle_etablissement">Libelle Niveauscolaire : </label>
                                        <input type="text" class="form-control" name="libelleniveau_scolaire">
                                        </div> 
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                            </div>

                          

                </div>
            </div>
        </div>
    </div>
    @endsection