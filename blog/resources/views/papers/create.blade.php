@extends('layout.main')

@section('content')
    <form method="POST" action="save">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
        <div class="form-group">
            <label for="categoria_id">Categoria</label>

        </div>
        <div class="form-group">
            <label for="sub_categoria_id">Subcategoria</label>

        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">
            <label for="ruta_grafico">Gráfico</label>
            <input type="file" class="form-control" id="ruta_grafico" name="ruta_grafico">
        </div>
        <div class="form-group">
            <label for="link_investigacion">Link de la investigación</label>
            <input type="text" class="form-control" id="link_investigacion" name="link_investigacion">
        </div>
        <div class="form-group">
            <label for="hashtags">Hashtags</label>
            <input type="text" class="form-control" id="hashtags" name="hashtags">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
@endsection
