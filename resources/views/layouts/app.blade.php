<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trains</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
    <body class="antialiased">

        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">TRAINS</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('home')}}" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Trains</a>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <input
                                class="form-control me-sm-2"
                                type="text"
                                placeholder="Search"
                            />
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="bg-light p-5">

            <div class="container">

                <div class="row">

                    <div class="col-6">
                        <h3>Company</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ipsa alias necessitatibus eos consequuntur quia blanditiis suscipit culpa odit dolores!</p>
                    </div>
                    <div class="col">
                        <h3>Quick links</h3>
                        <ul class="list-unstyled">
                            <li><a href="">Lorem</a></li>
                            <li><a href="">Lorem</a></li>
                            <li><a href="">Lorem</a></li>
                            <li><a href="">Lorem</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h3>Legal</h3>
                        <ul class="list-unstyled">
                            <li><a href="">Lorem</a></li>
                            <li><a href="">Lorem</a></li>
                            <li><a href="">Lorem</a></li>
                            <li><a href="">Lorem</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
