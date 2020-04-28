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
            <button class="btn btn-primary">Crear</button>
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

