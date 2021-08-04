@extends('layout.main')

@section('Titulo', "Detalles Paciente")

@section('content')

   <h1 class="text-center my-5">Detalles del Paciente</h1>

   <div class="row detallesPaciente mb-5">
       <div class="col-5 offset-1">
            <p class="row">
                <span class="col-6">Nombre(s):</span>
                <span class="col-6">{{$user->nombre}}</span>
            </p>
            <p class="row">
                <span class="col-6">Fecha de Nacimiento:</span>
                <span class="col-6">{{$user->fechaNacimiento}}</span>
            </p>
            <p class="row">
                <span class="col-6">Estado Civil:</span>
                <span class="col-6">{{$user->estadoCivil}}</span>
            </p>
            <p class="row">
                <span class="col-6">E-Mail:</span>
                <span class="col-6">{{$user->email}}</span>
            </p>
       </div>
       <div class="col-5">
            <p class="row">
                <span class="col-6">Apellido(s):</span>
                <span class="col-6">{{$user->apellidos}}</span>
            </p>
            <p class="row">
                <span class="col-6">Teléfono:</span>
                <span class="col-6">{{$user->telefono}}</span>
            </p>
            <p class="row">
                <span class="col-3">Domicilio:</span>
                <span class="col-9">{{$user->domicilio}}</span>
            </p>
       </div>
   </div>

@endsection