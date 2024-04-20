{{--https://getbootstrap.com/docs/5.3/getting-started/introduction/ --}}
{{--Creo esqueleto de la estructura base de la pagina--}}
    {{--Decidi utilizar bootstrap debido a que ya viene las implementaciones listas y mw ahorra tiempo--}}
    {{--blade es un motor de plantillas que me permite generar yield, section, extends o  plantillas dinamicas--}}
    {{--el .blade lo establece laravel--}}
<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coningenio.cl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <STYLE>
        /* Estilos para el modo noche (tema oscuro) */
        .noche .logo {
            max-height: 50px;
            height: 50px;
            background-image: url("images/logo-grande-letras-blanco.png");
            background-size: contain;
            background-repeat: no-repeat;
        }
        .noche .btn-light,
        .noche .btn-light:hover,
        .noche .btn-light:focus {
            color: #333;
            text-shadow: none;
        }

        .noche body {
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .noche .cover-container {
            max-width: 42em;
        }

        .noche .nav-masthead .nav-link {
            color: rgba(255, 255, 255, .5);
            border-bottom: .25rem solid transparent;
        }

        .noche .nav-masthead .nav-link:hover,
        .noche .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
        }

        .noche .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
        }

        .noche .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
        }

        .dia .logo {
            max-height: 50px;
            height: 50px;
            background-image: url("images/logo-grande.png");
            background-size: contain;
            background-repeat: no-repeat;
        }

        /* Estilos para el modo día (tema claro) */
        .dia .btn-light,
        .dia .btn-light:hover,
        .dia .btn-light:focus {
            color: #333;
            text-shadow: none;
        }

        .dia body {
            text-shadow: none;
            box-shadow: none;
            background-color: #f8f9fa;
            color: #212529;
        }

        .dia .cover-container {
            max-width: 42em;
        }

        .dia .nav-masthead .nav-link {
            color: #007bff;
            border-bottom: .25rem solid transparent;
        }

        .dia .nav-masthead .nav-link:hover,
        .dia .nav-masthead .nav-link:focus {
            border-bottom-color: #0056b3;
        }

        .dia .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
        }

        .dia .nav-masthead .active {
            color: #0056b3;
            border-bottom-color: #0056b3;
        }
    </STYLE>
</head>
<body class="d-flex h-100 text-center noche text-bg-dark">
{{--Menu--}}
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <div class="logo"></div>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link fw-bold py-1 px-0" id="menu-inicio" aria-current="page" href="/">Inicio</a>
                <a class="nav-link fw-bold py-1 px-0" id="menu-nuestros-servicios" href="/nuestros-servicios">Nuestros Servicios</a>
                <a class="nav-link fw-bold py-1 px-0" id="menu-contactanos" href="/contactanos">Contáctanos</a>
                <a class="nav-link fw-bold py-1 px-0" id="menu-nosotros" href="/nosotros">Nosotros</a>
                <a class="nav-link fw-bold py-1 px-0" id="menu-switch-estilo" href="#">Modo Día</a>
            </nav>
        </div>
    </header>

    <main class="px-3">
   {{--Contenido será la parte dinámica del esqueleto--}}
        {{--Yield es para agregar una seccion dinámica--}}
    @yield("contenido")
    </main>
    <footer class="mt-auto text-primary" id="pie">
        <p>Coningenio.cl por Magdalena Inalaf G.</p>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    //https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener
    var estiloGlobal = "noche"; // Inicializar como 'noche' o 'dia' según el estilo predeterminado.
    var body = document.body; // Obtenemos el elemento body para cambiar las clases.
    var cambio = document.getElementById("menu-switch-estilo");
    cambio.addEventListener("click", () => {
        if (estiloGlobal === "noche") {
            body.classList.add("dia");
            body.classList.add('text-bg-light')
            body.classList.remove("noche");
            body.classList.remove('text-bg-dark')
            estiloGlobal = "dia";
        } else {
            body.classList.add("noche");
            body.classList.add('text-bg-dark')
            body.classList.remove("dia");
            body.classList.remove('text-bg-light')
            estiloGlobal = "noche";
        }
    });
</script>
@yield("javascript-final")
</body>
</html>

