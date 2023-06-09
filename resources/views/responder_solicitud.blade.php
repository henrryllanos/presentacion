@extends('vista')
@section('main')
<h3>Zonas</h3>
@foreach ( $zonas as $zona)
        <h4>{{$zona->nombre}}</h4>
            <div class="d-flex flex-wrap">
                @foreach ($zona->parqueos as $parqueo)
                    @php
                        $libre=1;
                    @endphp
                    @foreach ($ocupados as $ocupado)
                        @if ($ocupado->respuesta->parqueo_id == $parqueo->id)
                            @php
                                $libre=0;
                            @endphp
                        @endif
                    @endforeach
                    @if ($libre==1)
                    <div class="col-3 libre" id="{{$parqueo->id}}">{{$parqueo->numero}}</div>
                    @else
                    <div class="col-3 ocupado" id="{{$parqueo->id}}">{{$parqueo->numero}}</div>
                    @endif
                @endforeach
            </div>
@endforeach
    <form action="{{route('responder')}}" id="formulario" method="POST">
        @csrf
        <h3>Responder solicitud</h3>
        <span>Cliente: {{$solicitud->usuario->name}}</span><br>
        <span>Fecha: {{$solicitud->fecha}}</span><br>
        <span>Hora: {{$solicitud->hora_inicio}} - {{$solicitud->hora_fin}}</span><br>
        <input type="hidden" name="id" value="{{$solicitud->id}}">
        <label for="">Seleccionar parqueo:</label>
        <select name="parqueo" id="" class="form-select">
            @foreach ($parqueos as $parqueo)
                @php
                $encontrado=0;
                @endphp
                @foreach ($ocupados as $ocupado)
                    @if ($ocupado->respuesta->parqueo_id == $parqueo->id)
                        @php
                            $encontrado=1;
                        @endphp
                    @endif
                @endforeach
                @if ($encontrado==0)
                <option value="{{$parqueo->id}}">{{$parqueo->numero. "-". $parqueo->zona->nombre}}</option>
                @endif
            @endforeach
        </select>
        <div class="row">
            <button class="col btn" id="asignar">Registrar</button>
            <div class="col btn" id="cancelar"><a href="{{route('reservas')}}">Cancelar</a></div>
        </div>
    </form>
@endsection