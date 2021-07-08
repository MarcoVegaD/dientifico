@extends('layout.main')

@section('Titulo', "Nuevo paciente")

@section('content')

   <h1 class="text-center my-5">Agregar Nuevo Paciente</h1>

    @if (session('fail'))
        <div class="alert alert-danger col-8 offset-2">{{session('fail')}}</div>
    @endif

   <form method="POST" action="{{route('pacienteStore')}}" class="row formPacientes mb-5">
        @csrf
        <div class="col-4 offset-2">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre(s)</label>
                <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}" required>
                <span class="text-danger">@error('nombre'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" name="fechaNacimiento" class="form-control" value="{{old('fechaNacimiento')}}" required>
                <span class="text-danger">@error('fechaNacimiento'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="estadoCivil" class="form-label">Estado Civil</label>
                <input type="text" name="estadoCivil" class="form-control" value="{{old('estadoCivil')}}" required>
                <span class="text-danger">@error('estadoCivil'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-Mail</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
            </div>
            
        </div>
        <div class="col-4">
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" value="{{old('apellidos')}}" required>
                <span class="text-danger">@error('apellidos'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" name="telefono" class="form-control" value="{{old('telefono')}}" required>
                <span class="text-danger">@error('telefono'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="domicilio" class="form-label">Domicilio</label>
                <textarea name="domicilio" cols="30" rows="4" class="form-control" value="{{old('domicilio')}}"></textarea>
            </div>
            
            <input class="btn btn-success" type="submit" value="Agregar Paciente">
        </div>
   </form>

@endsection