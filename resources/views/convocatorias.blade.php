@extends('vista')
@section('main')
    <h3>Convocatorias</h3>
    <div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Asunto</th>
                            <th>Documento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($convocatorias as $convocatoria)
                        <tr>
                            <th>{{$convocatoria->asunto}}</th>
                            <th><a href="{{$convocatoria->url}}">Ver Documento</a></th>
                        </tr>
                        @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection