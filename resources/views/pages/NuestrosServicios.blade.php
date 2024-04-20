{{--Extiendo el esqueleto "copio" lo que hay para replicarlo en el resto de las páginas--}}
@extends("layouts.bootstrap")
{{--Agrego el contenido que es dinámico definido con yield--}}
@section("contenido")
    <div class="container mt-5" id="servicios">
        <h2 class="mb-4">Nuestros Servicios</h2>
        <p>En <strong>Coningenio.cl</strong>, ofrecemos una amplia gama de soluciones diseñadas para impulsar el crecimiento digital y optimizar la experiencia del usuario. Conoce más sobre cada uno de nuestros servicios especializados:</p>
    </div>

@stop
@section("javascript-final")
    <script>
        document.getElementById("menu-nuestros-servicios").classList.add("active");
        //javascript
        //llamando al endpoint
        //blade nos entrega la ruta cuidando el host donde vive
        //es laravel que nos entrega la ruta correcta dependiendo de su configuracion
        fetch('/v1/services')
            // transformo la respuesta en json
            .then(response => response.json())
            // con la respuesta en json, le llamaremos jsonData
            .then(jsonData => {
                // jsonData.data es un arreglo con los servicios, entonces
                // definiremos para cada uno (forEach) lo que tendra que hacer
                jsonData.data.forEach(servicio => {
                    // Esta es la representacion de la caja que agregaremos al contenedor
                    // colocando el titulo y el texto del servicio ${servicio.titulo.esp} ${servicio.texto.esp}
                    var htmlContent = `
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">${servicio.titulo.esp}</h5>
                        <p class="card-text">${servicio.texto.esp}</p>
                    </div>
                </div>
            </div>
        </div>`;

                    // encuentro del contenedor
                    var container = document.getElementById('servicios');
                    // inserto al final el html creado
                    container.insertAdjacentHTML('beforeend', htmlContent);
                })
            })
    </script>
@stop
