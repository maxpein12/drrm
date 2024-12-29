<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Disasters Escape Room</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/disaster-index.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Hello, {{ session('logged_in_user') }}</a>
               
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi bi-house-door-fill"></i>
                            Home
                           
                        </button>
                    </form>
                </div>
            </div>
        </nav>
      
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  
                    <div class="description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam ratione amet eum voluptas, dicta mollitia aliquid possimus ex magni odit laudantium reprehenderit architecto aut, placeat voluptatem quas animi, maxime officiis.
                    </div>


                    @foreach ($disasters as $disaster)
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{ $disaster->disaster_name }}</div>
                        <div class="card-body">
                            <h5 class="card-title" id="card-title-{{ $loop->index }}">
                                @if ($loop->index == 0)
                                    <img src="{{ asset('assets/icons8-open-lock-48.png') }}" alt="">
                                @else
                                    <img src="{{ asset('assets/icons8-lock-48.png') }}" alt="">
                                @endif
                            </h5>
                            <p class="card-text">Click the Arrow to choose. <a href="{{ url('disasters/'.$disaster->disaster_name.'/scenario1') }}"><img src="https://www.svgrepo.com/show/507168/arrow-right-circle.svg" alt=""></a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Nuggets 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/disaster-index.js') }}"></script>
    </body>
</html>
