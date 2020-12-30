<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/"><img src="{{asset("img/molen.PNG")}}" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link active text-light mr-5" aria-current="page" href="/">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light mr-5" href="/cours">Cours</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light mr-5" href="/mesCours">Mes Cours</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light mr-5" href="/profil">Profil</a>
                  </li>
                </ul>
              </div>
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                      @if (Auth::user()->role == "admin")
                        <a href="{{ url('/home') }}" class="btn btn-light">Home</a>     
                      @endif
                        <a href="{{ url('/logout') }}" class="btn btn-light"> se deconnecter </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light">se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light">s'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
          </nav>
    </header>
    <section>
        @yield('content')
    </section>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>