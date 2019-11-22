<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.ico') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ url('/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Swiss Hockey Fan') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- flat icon css link -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate css link -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- slick slider css link -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive css file -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

</head>
<body>
    <!-- preloader start -->
    <div id="preloader"></div>
    <!-- preloader end -->

      <!--  header-section start  -->
  <header class="header-section">
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="site-logo site-title" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="site-logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav main-menu ml-auto">
                <!-- <li class="active"><a href="index.html">Home</a></li> -->
                <li><a href="{{ route('prediction.index') }}">Spielplan / Tippabgabe</a></li>
                <li class="menu_has_children"><a href="#">Rangliste</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('user.rang-list') }}">Rangliste Einzeln</a></li>
                        <li><a href="{{ route('user.tip-group-list') }}">Rangliste Tippgruppen</a></li>
                    </ul>
                </li>
                @guest
                @else
                <li><a href="{{ route('tip-group.index') }}">Tippgruppe</a></li>
                @endguest
                {{-- <li><a href="#">Spielregeln</a></li> --}}
                <li><a href="{{ url('/sponsors') }}">Sponsoren</a> </li>
                <li class="menu_has_children"><a href="#">Preise</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('/preise') }}">Einzelspieler Gesamt</a></li>
                        <li><a href="{{ url('/monatspreise') }}">Monatspreise</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact.index') }}">Kontakt</a></li>
                @guest
                <li class="login-register">
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="login-register">
                    <a href="{{ route('register') }}">{{ __('Registrierung') }}</a>
                </li>
                @endif
                @else
                <li class="menu_has_children login-register pr-0">
                    <a href="#" class="pr-4">
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </a>
                    <ul class="sub-menu">
                        <li><a href="/user/{{ Auth::user()->id }}/edit">Mein Profil</a></li>
                        <li><a href="{{ route('user.predictions', ['id' => Auth::id()]) }}">Unsere Tipps</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >{{ __('Abmelden') }}</a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
                @endguest
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  @yield('content')

      <!-- footer-section start -->
    <footer class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="footer-widget widget-about">
                            <a class="logo"><img src="{{ asset('images/logo.png') }}" alt="image"></a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="footer-widget widget-menu">
                            <h3 class="widget-title">Menu</h3>
                            <ul class="menu-links">
                                <li><a href="{{ route('prediction.index') }}">Spielplan / Tippabgabe</a></li>
                                <li><a href="{{ url('/sponsors') }}">Sponsoren</a></li>
                                <li><a href="{{ url('/monatspreise') }}">Monatspreise</a></li>
                                <li><a href="{{ route('contact.index') }}">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="footer-widget widget-subscribe">
                            <h3 class="widget-title">Kontakt</h3>
                            <div class="widget-subscribe-body">
                                <ul class="address-list">
                                    <li>Firmen Event GmbH </li>
                                    <li> Hinterrietstrasse 1 </li>
                                    <li> 8317 Tagelswangen</li>
                                </ul>
                                <form class="subscribe-form">
                                    <input type="email" name="subs-email" id="subs-email" class="subs-email"
                                        placeholder="E-Mail Adresse">
                                    <input type="submit" value="Anmelden" class="sub-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- footer-top end -->
        <div class="footer-bottom text-center">
            <div class="container">
                <p>© swiss-hockey-fan.ch | Powered by Wettgame.ch & | <a href="https://die-werber.ch"> Die Werber</a></p>
            </div>
        </div>
    </footer>
    <!-- footer-section end -->
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- main jquery library js file -->
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <!-- bootstrap js file -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- slick slider js file -->
  <script src="{{ asset('js/slick.min.js') }}"></script>
  <!-- lightcase js file -->
  <script src="{{ asset('js/lightcase.js') }}"></script>
  <!-- wow js file -->
  <script src="{{ asset('js/wow.min.js') }}"></script>

  <script src="{{ asset('js/moment-with-locales.min.js') }}"></script>

  <script>
      moment.locale('de');
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  @stack('scripts')
  <!-- tweenmax js file -->
  <!-- <script src="{{ asset('js/TweenMax.min.js') }}"></script> -->
  <!-- main js file -->
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
