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
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
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
                    <div class="modal-body">
                        <div class="row">
                            <div class="col col-6">
                                <div>
                                    <label for="">Nombre</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="">Carnet Identidad</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="">Enfermedad</label>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="col col-6">
                                <div>
                                    <label for="">Apellidos</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="">Fecha de Consulta</label>
                                    <input type="datetime" name="" id="">
                                </div>
                                <div>
                                    <label for="">Descripción Patologica</label>
                                    <input type="text">
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <table class="table">
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
            <tbody><!--dsadsd-->
                @foreach ($diagnosticos as $diagnostico)
                    <tr>
                        <td>1</td>
                        <td>{{$diagnostico->nombre}}</td>
                        <td>{{$diagnostico->apellidos}}</td>
                        <td>{{$diagnostico->ci}}</td>
                        <td>{{$diagnostico->fecha_consulta}}</td>
                        <td>{{$diagnostico->enfermedad}}</td>
                        <td>{{$diagnostico->descripcion_patologia}}</td>
                        <td>
                            <button class="btn btn-warning">editar</button>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

