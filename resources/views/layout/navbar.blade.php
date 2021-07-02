<div class="row headTop">
    <div class="col-2">222 587 0464</div>
    <div class="col-8">Servicio de emergencia 24/7</div>
    <div class="col-2">
        <a href="#"><img class="socialIcon" src="{{asset('imgs/icons/fb.png')}}" alt="Facebook"></a>
        <a href="#"><img class="socialIcon" src="{{asset('imgs/icons/instagram.png')}}" alt="Instagram"></a>
    </div>
</div>

<div class="row headNav my-2">
    <img class="col-2 logo ms-3" src="{{asset('imgs/logoIcon.png')}}" alt="Dientifico Logo">
    <img class="col-2 logo" src="{{asset('imgs/logoNombre.png')}}" alt="Dientifico Logo">
    <div class="col-8">
        <nav class="navbar navbar-expand">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="{{route('home')}}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('conocenos') ? 'active' : ''}}" href="{{route('about')}}">Conócenos</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('servicios') ? 'active' : ''}}" href="{{route('servicios')}}">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('preguntas-frecuentes') ? 'active' : ''}}" href="{{route('faq')}}">Preguntas Frecuentes</a></li>
                    @guest
                    <li class="nav-item"><a class="nav-link {{request()->is('login') ? 'active' : ''}}" href="{{route('login')}}">Login</a></li> 
                    @endguest
                    @auth
                    <li class="nav-item"><a class="nav-link {{request()->is('pacientes/*') ? 'active' : ''}}" href="{{route('home')}}">Pacientes</a></li> 
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Logout</a></li> 
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</div>