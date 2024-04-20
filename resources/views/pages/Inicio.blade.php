{{--Extiendo el esqueleto "copio" lo que hay para replicarlo en el resto de las páginas--}}
@extends("layouts.bootstrap")
{{--Agrego el contenido que es dinámico definido con yield--}}
@section("contenido")
    <h1>Bienvenido</h1>
    <p class="lead">Empresa innovadora con la convicción de entregar un servicio de calidad para nuestros clientes, así atender sus requerimientos de manera oportuna, logrando las bases para una relación comercial exitosa.</p>
@stop
@section("javascript-final")
    <script>
        document.getElementById("menu-inicio").classList.add("active");
    </script>
@stop
