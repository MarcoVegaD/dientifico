@extends('layout.main')

@section('Titulo', "Pacientes")

@section('content')


    <div class="row">
        <h1 class="text-center my-3">Lista de Pacientes</h1>
        <a href="{{route('agregarPaciente')}}" class="col-2 offset-9 btn btn-primary my-2 fw-bold">Agregar nuevo paciente</a>
        @if (session('success'))
            <div class="alert alert-success col-8 offset-2">{{session('success')}}</div>
        @endif
        <div class="col-10 offset-1">
            <table class="table table-light table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="col-1">Nombre(s)</th>
                        <th class="col-1">Apellidos</th>
                        <th class="col-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $p)
                    <tr>
                        <td>{{$p->nombre}}</td>
                        <td>{{$p->apellidos}}</td>
                        <td>
                            <a href="{{route('detallesPaciente', $p->id)}}" class="btn btn-success">Detalles</a>
                            <a href="{{route('editarPaciente', $p->id)}}"  class="btn btn-warning">Editar</a>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal-{{$p->id}}">Borrar</button>
                            @unless ($p->idHistoriaGeneral && $p->idHistoriaOdontologica)
                            <a href="{{route('detallesPaciente', $p->id)}}" class="btn btn-info">Añadir Historia Clínica</a>
                            @else
                            <a href="{{route('historiaClinicaShow', $p->id)}}" class="btn btn-info">Historia Clínica</a>
                            @endunless

                            <!-- MODAL DE BORRADO -->
                            <div class="modal fade" id="Modal-{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Borrar Paciente</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Está seguro de querer borrar al Paciente: {{$p->nombre}} ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form action="{{route('borrarPaciente', $p->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Eliminar Paciente</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                              
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
    
@endsection