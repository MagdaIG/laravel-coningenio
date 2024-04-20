{{--Extiendo el esqueleto "copio" lo que hay para replicarlo en el resto de las páginas--}}
@extends("layouts.bootstrap")
{{--Agrego el contenido que es dinámico definido con yield--}}
@section("contenido")

    <div class="container mt-5">
        <h2 class="mb-4">Contáctanos</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h4>Envíanos un mensaje</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="enviarformulario()">Enviar</button>
                </form>
            </div>
            <div class="col-lg-6 mb-4">
                <h4>Información de Contacto</h4>
                <p><strong>Dirección Física:</strong><br>
                    Av. Providencia 1234, Oficina 601<br>
                    Providencia, Santiago<br>
                    Chile</p>
                <p><strong>Contacto Telefónico:</strong><br>
                    Teléfono: +56 2 1234 5678</p>
                <p><strong>Correo Electrónico:</strong><br>
                    <a href="mailto:info@coningenio.cl">info@coningenio.cl</a></p>
                <p><strong>Sitio Web:</strong><br>
                    <a href="http://www.coningenio.cl" target="_blank">www.coningenio.cl</a></p>
            </div>
        </div>
    </div>
@stop
@section("javascript-final")
    <script>
        document.getElementById("menu-contactanos").classList.add("active");
        function enviarformulario() {
            var name = document.getElementById("name")
            var email = document.getElementById("email")
            var message = document.getElementById("message")

            if (name.value.length === 0) {
                alert("Debes escribir un nombre")
                return;

            }
            if (email.value.length === 0) {
                alert("Debes escribir un email")
                return;

            }
            if (message.value.length === 0) {
                alert("Debes escribir un mensaje")
                return;
            }
            console.log("nombre", name.value)
            console.log("email", email.value)
            console.log("message", message.value)
            alert("Formulario enviado correctamente")
        }

    </script>
@stop
