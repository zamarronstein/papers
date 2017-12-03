@extends('layout.main')

@section('content')
    
            @foreach($usuario as $usuario)
            <div class="center-block">
                <div class="card pull-left" style="width:900px" align="center">
                
  					<div class="card-block">
   					 <h4 class="card-title">{{$usuario->num_publicaciones}}</h4>
    				<h3 class="card-subtitle mb-2 text-muted">Titulo</h3><br><h1>Grafico</h1><br>

    <p class="card-text">Conclusion 1 <br> Conclusion 2 <br>Conclusion 3</p>
    <a href="#" class="card-link">Link investigacion </a><br>
    <a href="#" class="card-link">hastags</a>
              </div>
  </div>
</div>
            @endforeach
     
@endsection