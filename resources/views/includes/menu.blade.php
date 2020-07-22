    <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="/">
        <strong id='nombreMarca'>Complejo Turístico</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-weight : bold">
        <!-- Left -->
        <ul class="navbar-nav mr-auto" id='elementosMenu1'>
            @guest
            <li class="nav-item dropdown">
                <a class="nav-link" href="/">Inicio</a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Gastronomía</a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Información del sitio</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Ubicación geográfica</a>
                    <a class="dropdown-item" href="#">Eventos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Reservas</a>
            </li>
            @else  
            
            <li class="nav-item dropdown">
                <a class="nav-link" href="/users">Usuarios</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Eventos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Gastronomía</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Reservas</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Configuración del sitio</a>
            </li>
            @endguest
            @auth

            @endauth
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons" id='elementosMenu2'>
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <svg class="bi bi-people-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                    </svg> Acceder
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/create-user">
                                    <svg class="bi bi-people-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                    </svg> Registrar
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre title="{{ Auth::user()->email }}">
                                    <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <svg class="bi bi-power" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
                                            <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
                                        </svg> Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

