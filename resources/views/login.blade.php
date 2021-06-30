@extends('layout.main')
@section('Titulo', 'Login')

@section('content')

<div class="card mx-auto col-5 offset-7 my-3">
    <h1 class="card-title mx-auto">Acceso Médico</h1>
    @if ($errors->any())
    <div class="alert - alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <form class="card-body" method="POST">
        @csrf
        <label class="form-label" for="email">E-Mail</label>
        <input class="form-control" type="email" placeholder="Correo Electrónico" required value="{{old('email')}}">
        <br>
        <label class="form-label" for="password">Contraseña</label>
        <input class="form-control" type="password" placeholder="Contraseña" required>
        <div class="form-check form-switch mt-2"><input type="checkbox" name="remember"class="form-check-input"><label for="remember" class="form-check-label">Mantener sesión activa</label></div>
        <br>
        <button type="submit" class="btn btn-primary">Acceder</button>
    </form>
</div>
    
@endsection