@extends('layouts.app')
@section('content')

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Editanto los Registros de Diagnostico</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<!--<form action="{{ route('diagnostico.update', $diagnostico->id) }}" method="POST" enctype="multipart/form-data">-->
    {{ method_field('PUT') }}
    {{ csrf_field() }}

        <div class="row">
            <div class="col col-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{ $diagnostico->nombre }}">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" value="{{ $diagnostico->apellidos }}">
                </div>
                <div class="form-group">
                    <label for="ci">Carnet de Identidad</label>
                    <input type="text" name="ci" value="{{ $diagnostico->ci }}">
                </div>
            </div>
            <div class="col col-6">
                <div class="form-group">
                    <label for="fecha_consulta">Fecha Consulta</label>
                    <input type='text' name="fecha_consulta" value="{{ $diagnostico->fecha_consulta }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="enfermedad">Enfermedad</label>
                    <input type="text" name="enfermedad" value="{{ $diagnostico->enfermedad }}">
                </div>
                <div class="form-group">
                    <label for="descripcion_patologia">Descripción Patologica</label>
                    <input type="text" name="descripcion_patologia" value="{{ $diagnostico->descripcion_patologia }}">
                </div>
            </div>
        </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
    </div>
</form>

@endsection
