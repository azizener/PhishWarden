<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PhishWard</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
       
       
       /* head section */
       body{margin-top:20px;}

.masthead {
    padding: 3rem 0 7rem;
    position: relative;
    background-color: #dd3d31;
    background-image: url(https://startbootstrap.com/assets/img/overlay.svg), linear-gradient(45deg, #dd3d31 0%, #d22f23 100%);
    background-size: cover;
    z-index: 0
}

.masthead svg.wave {
    position: absolute;
    bottom: -1px;
    left: 0
}

.masthead h1 {
    color: #fff;
    font-weight: 700;
    font-size: 2rem;
    line-height: 1.1;
    z-index: 1
}

.masthead h2 {
    color: rgba(255, 255, 255, .6);
    font-weight: 600;
    z-index: 1;
    font-size: 1.2rem
}

.masthead a {
    color: rgba(255, 255, 255, .8);
    text-decoration: underline;
    z-index: 1
}

.masthead a:hover {
    color: #fff
}

.masthead a:active {
    text-decoration: none
}

@media(min-width:992px) {
    .masthead h1 {
        font-size: 3rem
    }
    .masthead h2 {
        font-size: 1.5rem
    }
}

.masthead .masthead-cards {
    position: relative;
    z-index: 1
}

.masthead .masthead-cards .shape {
    position: absolute;
    height: 100%;
    width: 100%;
    background-color: rgba(255, 255, 255, .3);
    top: 0;
    left: 0;
    z-index: -1;
    border-radius: 30% 70% 70% 30%/30% 30% 70% 70%
}

.masthead .masthead-cards .card {
    opacity: 1;
    font-size: .8rem;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: .05rem;
    color: #212529;
    transition: .15s all
}

.masthead .masthead-cards .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem
}

.masthead .masthead-cards .card:active {
    margin-top: inherit;
    margin-bottom: inherit
}

.masthead .masthead-cards .card.border-bottom-blue:hover {
    color: #2092ed
}

.masthead .masthead-cards .card.border-bottom-green:hover {
    color: #28a745
}

.masthead .masthead-cards .card.border-bottom-red:hover {
    color: #dd3d31
}

.masthead .masthead-cards .card.border-bottom-yellow:hover {
    color: #ffc107
}

.masthead-page {
    padding: 1rem 0 4rem
}

@media(min-width:992px) {
    .masthead-page h1 {
        font-size: 2.5rem
    }
}

.border-bottom-yellow {
    border-color: #ffc107!important;
}

.border-bottom-red {
    border-color: #dd3d31!important;
}

.border-bottom-blue {
    border-color: #2092ed!important;
}

.border-bottom-green {
    border-color: #28a745!important;
}

.border-bottom-blue, .border-bottom-green, .border-bottom-red, .border-bottom-yellow {
    border-bottom: .4rem solid!important;
}
.shadow-lg {
    box-shadow: 0 2rem 1.5rem -1.5rem rgba(33,37,41,.15),0 0 1.5rem .5rem rgba(33,37,41,.05)!important;
}
.border-0 {
    border: 0!important;
}



       /* form section */
.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}


    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    PhishWard
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Panel</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-body-tertiary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">Taibah University Students</a>
  </div>
  <!-- Copyright -->
</footer>
    </div>
</body>
</html>
