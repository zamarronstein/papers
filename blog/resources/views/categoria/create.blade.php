@extends('layout.main')

@section('content')
    <form method="POST" action="save">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
        <div class="form-group">
            <label for="nombre_categoria">Categoria:</label>
            <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria">
        </div>

        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
@endsection