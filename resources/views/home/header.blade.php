
@section('head')
        <!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('personal/home/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>ExpertSX - Rate Platform by GennadySX</title>

    <!--
            Google Font
            ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('personal/home/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('personal/home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('personal/home/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('personal/home/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('personal/home/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('personal/home/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('personal/home/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('personal/home/css/main.css')}}">
</head>

<body>

<!-- Start Header Area -->
<header id="header">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="{{asset('personal/home/img/logo.png')}}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Главный</a></li>
                    <li><a href="#">Курсы</a></li>
                    
                    <li class="menu-has-children"><a href="">Оценки</a>
                        <ul>
                            <li><a href="#">Университетов</a></li>
                            <li><a href="#">Факультетов</a></li>
                            <li><a href="#">Кафедр</a></li>
                            <li><a href="#">Группы</a></li>
                        </ul>
                    </li>
                     <li><a href="#">О платформе</a></li>
                       @guest
                            <li><a href="{{ route('login') }}">Вход</a></li>
                     @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Зарегистроваться</a></li>
                             @endif
                        @else
                        <li class="menu-has-children"><a href="/dashboard">{{ Auth::user()->name }}</a>
                        <ul>
                            <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </ul>
                    </li>
                        
                        @endguest
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
@endsection
@section('footer')
   

    <script src="{{asset('personal/home/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="{{asset('personal/home/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{asset('personal/home/js/easing.min.js')}}"></script>
    <script src="{{asset('personal/home/js/hoverIntent.js')}}"></script>
    <script src="{{asset('personal/home/js/superfish.min.js')}}"></script>
    <script src="{{asset('personal/home/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('personal/home/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('personal/home/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('personal/home/js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{asset('personal/home/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('personal/home/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('personal/home/js/parallax.min.js')}}"></script>
    <script src="{{asset('personal/home/js/waypoints.min.js')}}"></script>
    <script src="{{asset('personal/home/js/wow.min.js')}}"></script>
    <script src="{{asset('personal/home/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('personal/home/js/mail-script.js')}}"></script>
    <script src="{{asset('personal/home/js/main.js')}}"></script>
</body>

</html>
@endsection




