 
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
                        <form action="{{route('filiere.update' , ['id'=> $fil->id])}}" method="POST"> 
                            {{ csrf_field() }}
                                        <div class="form-group">
                                        <label for="libelle_filiere">Libelle Niveauscolaire : </label>
                                        <input type="text" class="form-control" name="libelle_filiere" value="{{$fil->libelle_filiere}}">
                                        </div> 
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                            </div>

                          

                </div>
            </div>
        </div>
    </div>
    @endsection