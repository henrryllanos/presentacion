@extends('vista')
@section('main')
<h3>Cambiar reserva</h3>
<div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Cambiar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($solicitudes as $solicitud)
                    <tr> 
                        <th>{{$loop->iteration}}</th>
                        <th>{{$solicitud->usuario->name}}</th>
                        <th>{{$solicitud->fecha}}</th>
                        <th><a href="{{route('cambiar_parqueo',['id'=>$solicitud->id])}}">Cambiar</a></th>
                    </tr>
                    @empty
                        
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection