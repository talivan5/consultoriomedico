@extends('layouts.app')
@section('content')
    <div class="container">
        <div style="text-align: center;">
            <h1>
                Registro de Diagnosticos
            </h1>
        </div>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Buscar</span>
                </div>
                <input type="text" class="form-control" name="searchText" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                <button class="btn btn-primary" data-toggle="modal" data-target="#crear">Crear</button>
            </div>

        <div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar el Diagnostico</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="diagnostico" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="row">
                                <div class="col col-6">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        <input type="text" name="apellidos">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Carnet de Identidad</label>
                                        <input type="text" name="ci">
                                    </div>
                                </div>
                                <div class="col col-6">
                                    <div class="form-group">
                                        <label for="">Fecha Consulta</label>
                                        <input type='text' name="fecha_consulta"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Enfermedad</label>
                                        <input type="text" name="enfermedad">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Descripción Patologica</label>
                                        <input type="text" name="descripcion_patologia">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary float-left">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <table class="table table-responsive">
            <thead class="thead-dark">
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">C.I.</th>
                <th scope="col">Fecha Consulta</th>
                <th scope="col">Enfermedad</th>
                <th scope="col">Descripción Patologia</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($diagnostico as $diag)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$diag->nombre}}</td>
                        <td>{{$diag->apellidos}}</td>
                        <td>{{$diag->ci}}</td>
                        <td>{{$diag->fecha_consulta}}</td>
                        <td>{{$diag->enfermedad}}</td>
                        <td>{{$diag->descripcion_patologia}}</td>
                        <td>

                            <a href="" data-toggle="modal" data-target="#eliminar-{{$diag->id}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    @include('diagnostico.eliminar')
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

