      <nav class="navbar navbar-expand-md navbar-light shadow-sm  bg-white fixed-top  ">
            <div class="container-fluid ml-3">
                 <a class="navbar-brand font-weight-bolder"  href="{{ url('/') }}">
                 <img src="{{asset('img/logo.png')}}" alt="logo" class="logo">Immobilier.<span class="text-danger">ma</span>
                </a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Services</a>
                     </li>
                      <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Contactez-nous</a>
                     </li>
                     <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Qui Somme-nous ?</a>
                     </li>
                     <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Nos Actualités</a>
                     </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Se connecter </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link mr-3" href="{{ route('register') }}">S'inscrire</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle mr-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item info">
                                <a class="nav-link btn btn-danger  text-white " href="#">Déposer une annonce <i class="fas fa-plus"></i></a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
