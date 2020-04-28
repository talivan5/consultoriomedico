@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">C.I.</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>1</td>
                        <td>{{$paciente->nombre}}</td>
                        <td>{{$paciente->apellidos}}</td>
                        <td>{{$paciente->ci}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

