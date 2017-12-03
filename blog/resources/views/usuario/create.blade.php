@extends('layout.main')

@section('content')

<form method="POST" action="{{action("UsuarioController@save")}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
        <div class="form-group">
            <label for="titulo">foto</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">
            <label for="titulo">intereses</label>
            <input type="text" class="form-control" id="intereses" name="intereses">
        </div>
        <div class="form-group">
            <label for="titulo">numero de publicaciones</label>
            <input type="text" class="form-control" id="num_publicaciones" name="num_publicaciones">
        </div>
        <div class="form-group">
            <label for="titulo">nivel academico</label>
            <input type="text" class="form-control" id="nivel_academico" name="nivel_academico">
        </div>
        <div class="form-group">
            <label for="titulo">visualizaciones totales</label>
            <input type="text" class="form-control" id="visualizaciones_totales" name="visualizaciones_totales">
        </div>

        <button type="submit" class="btn btn-default">Guardar</button>
    </form>









@endsection