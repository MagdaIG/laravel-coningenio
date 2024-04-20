{{--Extiendo el esqueleto "copio" lo que hay para replicarlo en el resto de las páginas--}}
@extends("layouts.bootstrap")
{{--Agrego el contenido que es dinámico definido con yield--}}
@section("contenido")

    <div class="container mt-5">
        <h2 class="card-title">Nosotros</h2>
        <!-- Descripción General -->
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-text"><strong>CONINGENIO.CL</strong> es una empresa líder en innovación tecnológica, comprometida con la entrega de servicios de alta calidad. Nos dedicamos a entender y responder a los requerimientos de nuestros clientes de manera efectiva, estableciendo las bases para relaciones comerciales duraderas y exitosas. Nuestra filosofía se centra en la mejora continua y en la búsqueda constante de la excelencia en todos nuestros procesos.</p>
            </div>
        </div>
        <h4 class="card-title" id="titulo-mision"></h4>
        <!-- Misión -->
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-text" id="contenido-mision"></p>
            </div>
        </div>
        <h4 class="card-title" id="titulo-vision"></h4>

        <!-- Visión -->
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-text" id="contenido-vision"></p>
            </div>
        </div>
    </div>


@stop
@section("javascript-final")
    <script>
        document.getElementById("menu-nosotros").classList.add("active");
        //javascript
        //llamando al endpoint
        //blade nos entrega la ruta cuidando el host donde vive
        //es laravel que nos entrega la ruta correcta dependiendo de su configuracion
        fetch('/v1/about-us')
            .then(response => response.json())
            .then(jsonData => {
                document.getElementById("titulo-mision").innerHTML = jsonData.data.mision.titulo.esp;
                document.getElementById("contenido-mision").innerHTML = jsonData.data.mision.contenido.esp;
                document.getElementById("titulo-vision").innerHTML = jsonData.data.vision.titulo.esp;
                document.getElementById("contenido-vision").innerHTML = jsonData.data.vision.contenido.esp;
            })
        // Llamada al backend
        // Recepcion de datos
        // Popular datos (cambiar el contenido de los divs o contenedores)
    </script>
@stop
