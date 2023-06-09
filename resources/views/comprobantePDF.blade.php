<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
    <header><h1>Comprobante de pago</h1></header>
    <div class="cont">
        <p>Recibido:</p>
        <p>Empresa DEA S.R.L</p>
        <p>Direccion: Av. Oquendo y Jordan</p>
        <p>Web: www.dea.com</p>
        <p>Telefono: 76986478</p>
    </div>
    <div class="cont">
        <p>CLIENTE</p>
    <div class="row">
        <div class="col">
            <p>{{$usuario->name}}</p>
            <p>CI: {{$pago->ci}}</p>
            <p>DETALLE DE PAGO: {{$pago->detalle}}</p>
            <p>Monto pagado: {{$pago->monto}}</p>
            <p>Meses pagados:  {{$request->ene}} {{$request->feb}} {{$request->mar}} {{$request->abril}} {{$request->may}} {{$request->jun}} {{$request->jul}} {{$request->ago}} {{$request->sep}} {{$request->oct}} {{$request->nov}} {{$request->dic}}</p>
        </div>
        <div class="col">
            <p>Tipo de pago: {{$tipo}}</p>
            <p>Fecha: {{$pago->created_at}}</p>
        </div>
    </div>
    </div>
</body>
<style>
    header{
        background-color: rgb(42, 42, 118);
        color: white;
        padding: 1%;
        width: 98%;
        margin-left: 1%;
    }
    .cont{
        width: 90%;
        margin-left: 5%;
        border: solid black 1px;
        padding: 1%;
        margin-top: 2%;
    }
</style>
</html>