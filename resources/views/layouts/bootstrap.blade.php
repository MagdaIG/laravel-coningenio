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
        /*
 * Globals
 */


        /* Custom default button */
        .btn-light,
        .btn-light:hover,
        .btn-light:focus {
            color: #333;
            text-shadow: none; /* Prevent inheritance from ⁠ body ⁠ */
        }


        /*
         * Base structure
         */

        body {
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
            max-width: 42em;
        }


        /*
         * Header
         */

        .nav-masthead .nav-link {
            color: rgba(255, 255, 255, .5);
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
        }
    </STYLE>
</head>
<body class="d-flex h-100 text-center text-bg-dark">
{{--Menu--}}
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Coningenio.cl</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link fw-bold py-1 px-0" id="menu-inicio" aria-current="page" href="/">Inicio</a>
                <a class="nav-link fw-bold py-1 px-0" id="menu-nuestros-servicios" href="/nuestros-servicios">Nuestros Servicios</a>
                <a class="nav-link fw-bold py-1 px-0" id="menu-contactanos" href="/contactanos">Contáctanos</a>
                <a class="nav-link fw-bold py-1 px-0" id="menu-nosotros" href="/nosotros">Nosotros</a>

            </nav>
        </div>
    </header>

    <main class="px-3">
   {{--Contenido será la parte dinámica del esqueleto--}}
        {{--Yield es para agregar una seccion dinámica--}}
    @yield("contenido")
    </main>
    <footer class="mt-auto text-white-50">
        <p>Coningenio.cl por Magdalena Inalaf G.</p>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@yield("javascript-final")
</body>
</html>

