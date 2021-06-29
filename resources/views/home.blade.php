@extends('layout.main')

@section('Titulo', "Home")

@section('content')

    <div class="row slide_1"></div>

   <div class="row slide_2">
       <div class="col-7 ps-5">
           <p class="textoSlide2">Tu salud mental<br>es <span>nuestro<br>compromiso</span></p>
            <div class="lineaCorte"></div>
           <p class="longTextSlide2">Porque sabemos lo importante que es lucir una sonrisa hermosa y sana, buscamos el mejor tratamiento para ti a precios justos.</p>
       </div>
       <div class="col-5">
           <img class="w-100" src="{{asset('imgs/slides/homeSlide2.png')}}" alt="Home Slide 2">
       </div>
   </div>

   <div class="row slide_3">
       <h1 class="row">Servicios</h1>
       <div class="row servicios">
           <div class="col-3"><img src="{{asset('imgs/icons/')}}" alt=""><span>Cuidados preventivos</span></div>
           <div class="col-3"><img src="{{asset('imgs/icons/')}}" alt=""><span>Restauración</span></div>
           <div class="col-3"><img src="{{asset('imgs/icons/')}}" alt=""><span>Implantes y cirugía</span></div>
           <div class="col-3"><img src="{{asset('imgs/icons/')}}" alt=""><span>Ortodoncia</span></div>
       </div>
       <div class="row servicios">
           <div class="col-3"><img src="{{asset('imgs/icons/')}}" alt=""><span>Odontopediatría</span></div>
           <div class="col-3"><img src="{{asset('imgs/icons/')}}" alt=""><span>Geriatría</span></div>
           <div class="col-3"><img src="{{asset('imgs/icons/')}}" alt=""><span>Diagnóstico</span></div>
           <div class="col-3"><img src="{{asset('imgs/icons/')}}" alt=""><span>Cosmética</span></div>
       </div>
   </div>

   <div class="row slide_4">
    <div class="col-5 imgSlide4"></div>
    <div class="col-7">
        
    </div>
</div>
    
@endsection