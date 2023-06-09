@extends('vista')
@section('main')
    <form action="{{route('registrar_convocatoria')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Convocatoria UMSS</h3>
        <label for="">Seleccionar pdf:</label>
        <input type="file" name="pdf" class="form-control">
        <label for="">Asunto:</label>
        <input type="text" name="asunto" class="form-control" value="{{old('asunto')}}">
        <input type="submit" value="Enviar" class="btn btn-primary mt-3">
    </form>
@endsection