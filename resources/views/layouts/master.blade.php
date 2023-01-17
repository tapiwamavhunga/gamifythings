<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('myassets/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" />
    <link href="{{ asset('myassets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('myassets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css" integrity="sha512-ioRJH7yXnyX+7fXTQEKPULWkMn3CqMcapK0NNtCN8q//sW7ZeVFcbMJ9RvX99TwDg6P8rAH2IqUSt2TLab4Xmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="overflow-x: hidden;">
   <!--Navbar Start-->


<nav class="navbar navbar-expand-md navbar-dark  fixed-top navbar-kleo normal-nav">
    <div class="d-flex w-20 order-0">
        <a class="navbar-brand pl-3" href="/"><img src="{{asset('/myassets/images/Mobile Assets-7.png')}}" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center order-2 w-60" id="collapsingNavbar">
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link" href="/challenges">Challenges</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/champions">Champions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Visit Shalina</a>
            </li>
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1  text-right order-1 order-md-last">

 

@if(Auth::check())


<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                     <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}"
                                       >
                                        {{ __('My Profile') }}
                                    </a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @else 
   <a href="/login" class="btn btn-primary mr-5 vote_now"> <i class="far fa-user"></i> Login / Register</a>
   @endif 




                        </span>
</nav>
   


            
    <!-- Navbar End -->


        <main>
            @yield('content')
        </main>
    </div>

     <!-- Footer Start -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <p class="text-center white">2020 © Shalina. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->



<!-- JS -->
    <script src="{{ asset('myassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('myassets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('myassets/js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('myassets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('myassets/js/script.js') }}"></script>


</body>
</html>
