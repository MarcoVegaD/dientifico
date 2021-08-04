@extends('layout.main')

@section('Titulo', "Home")

@section('content')

    <div class="row slide_1"></div>

   <div class="row slide_2 mt-md-5">
       <div class="col-7 ps-5">
           <p class="textoSlide2">Tu salud dental<br>es <span>nuestro<br>compromiso</span></p>
            <div class="lineaCorte"></div>
           <p class="longTextSlide2">Porque sabemos lo importante que es lucir una sonrisa hermosa y sana, buscamos el mejor tratamiento para ti a precios justos.</p>
       </div>
       <div class="col-5">
           <img class="w-100" src="{{asset('imgs/slides/homeSlide2.png')}}" alt="Home Slide 2">
       </div>
   </div>

   <div class="row slide_3">
       <h1 class="row">Servicios</h1>
       <div class="row">
           <img src="{{asset('imgs/slides/homeSlide3.jpg')}}" alt="Servicios" class="col-12">
       </div>
   </div>

   <div class="row slide_4">
    <div class="col-5 imgSlide4"></div>
    <div class="col-7 testimonios">
        <h3 class="ps-2 display-3">Testimonios</h3>
        <div class="lineaCorte"></div>
        <p class="textoSlide4 ps-1">
            "Excelente atención, mi hijo se sintió muy tranquilo en todo momento y nos explicó con mucho detalle todo el procedimiento."
        </p>
        <br><br>
        <p class="textoSlide4 ps-1">"Son muy éticos y se preocupan mucho por sus pacientes."</p>
    </div>
</div>
    
@endsection