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
        <nav class="navbar navbar-expand-lg ">
            <div class="container px-1 px-lg-1 py-2">
                <a class="navbar-brand" href="#!" >Hello,  <br>&nbsp;&nbsp;{{ session('logged_in_user') }}</a>
               
                    <form class="d-flex">
                        <a href="{{ url('landing')}}">
                            <button class="btn" style=" background-color: #FFDE59; color: #E66F51; border-radius: 50px" type="submit">
                                <i class="bi bi-house-door-fill" ></i>
                                Home
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
      
        <!-- Section-->
        <section class="py-5" style="background-color: #EEE4C9; ">
            <div class="container px-4 px-lg-5 mt-5" >
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  
                    <div class="description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam ratione amet eum voluptas, dicta mollitia aliquid possimus ex magni odit laudantium reprehenderit architecto aut, placeat voluptatem quas animi, maxime officiis.
                    </div>


                    @foreach ($disasters as $disaster)
                    <div class="card text-white mb-3" style="max-width: 18rem; background-color: #E66F51">
                        <div class="card-header">{{ $disaster->disaster_name }}</div>
                        <div class="card-body">
                            <h5 class="card-title" id="card-title-{{ $loop->index }}">
                               <img src="{{ asset('assets/home_icon_typhoon.png') }}" alt="">
                            </h5>
                            <p class="card-text">Click the Arrow to choose. <a href="{{ url('disasters/'.$disaster->disaster_name.'/scenario1') }}"><img src="https://cdn-icons-png.flaticon.com/512/626/626043.png" style="background-color: #0C5D9E; filter: invert(100%); padding: 5px" alt=""></a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-4" style="background-color: #9FB66C;">
            <div class="container" style=""><p class="m-0 text-center text-white">Copyright &copy; Nuggets 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/disaster-index.js') }}"></script>
    </body>
</html>
