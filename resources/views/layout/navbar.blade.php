<div class="row headTop mt-4">
    <div class="col-3 ps-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg>
        222 587 0464
    </div>
    <div class="col-8 ps-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
        </svg>
        Servicio de emergencia 24/7</div>
    <div class="col-1 me-0 pe-0 ">
        <a href="#"><img class="socialIcon" src="{{asset('imgs/icons/fb.png')}}" alt="Facebook"></a>
        <a href="#"><img class="socialIcon" src="{{asset('imgs/icons/instagram.png')}}" alt="Instagram"></a>
    </div>
</div>

<div class="row headNav my-2">
    <a href="{{route('home')}}" class="col-4">
        <img class="col-6 logo ms-3 d-none d-lg-inline" src="{{asset('imgs/logoIcon.png')}}" alt="Dientifico Logo">
        <img class="col-6 logo" src="{{asset('imgs/logoNombre.png')}}" alt="Dientifico Logo">
    </a>
    
    <div class="col-8">
        <nav class="navbar navbar-expand">
            <div class="content-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="{{route('home')}}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('conocenos') ? 'active' : ''}}" href="{{route('about')}}">Conócenos</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('servicios') ? 'active' : ''}}" href="{{route('servicios')}}">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->is('preguntas-frecuentes') ? 'active' : ''}}" href="{{route('faq')}}">Preguntas Frecuentes</a></li>
                    @guest
                    <li class="nav-item"><a class="nav-link {{request()->is('login') ? 'active' : ''}}" href="{{route('login')}}">Login</a></li> 
                    @endguest
                    @auth
                    <li class="nav-item"><a class="nav-link {{request()->is('pacientes*') ? 'active' : ''}}" href="{{route('pacientes')}}">Pacientes</a></li> 
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST" style="display: inline">
                        @csrf
                        <a class="nav-link" href="#" onclick="this.closest('form').submit()">Logout</a>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>

    </div>
</div>