@extends('layout.main')

@section('content')
    
            @foreach($papers as $papers)
            <div class="center-block">
                <div class="card pull-right" style="width:900px" align="center">
                
  					<div class="card-block">
   					 <h4 class="card-title">{{$papers->titulo}}</h4>
    				<h3 class="card-subtitle mb-2 text-muted">Titulo</h3><br><h1>Grafico</h1><br>

    <p class="card-text">Conclusion 1 <br> Conclusion 2 <br>Conclusion 3</p>
    <a href="{{$papers->link_investigacion}}" class="card-link">Link investigacion </a><br>
    <a href="#" class="card-link">hastags</a>
              </div>
  </div>
</div>
            @endforeach
     
@endsection
