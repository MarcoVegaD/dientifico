@extends('layout.main')

@section('Titulo', "Home")

@section('content')

    <div class="slide_1">
        Esto es el slide 1
    </div>

    <button class="btn btn-success">Pito botonico</button>

    <img src="{{asset('imgs/404.jpg')}}" alt="" srcset="">
    
@endsection