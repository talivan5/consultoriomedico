<?php

namespace App\Http\Controllers;

use App\Diagnostico;
use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    public function index()
    {
        $diagnosticos = Diagnostico::all();
        return view('diagnostico',compact('diagnosticos'));
    }

    public function store(Request $request)
    {
        $diagnostico                            = new Diagnostico();
        $diagnostico->nombre                    = $request->nombre;
        $diagnostico->apellidos                 = $request->apellidos;
        $diagnostico->ci                        = $request->ci;
        $diagnostico->fecha_consulta            = $request->fecha_consulta;
        $diagnostico->enfermedad                = $request->enfermedad;
        $diagnostico->descripcion_patologia     = $request->descripcion_patologia;

        $diagnostico->save();

        return view('diagnostico',compact('diagnostico'));
    }

    public function show($id)
    {
        $diagnostico = Diagnostico::findOrFail($id);
        return view('diagnostico',compact('diagnostico'));
    }

    public function update(Request $request, $id)
    {
        $diagnostico                            = Diagnostico::findOrFail($id);
        $diagnostico->nombre                    = $request->nombre;
        $diagnostico->apellidos                 = $request->apellidos;
        $diagnostico->ci                        = $request->ci;
        $diagnostico->fecha_consulta            = $request->fecha_consulta;
        $diagnostico->enfermedad                = $request->enfermedad;
        $diagnostico->descripcion_patologia     = $request->descripcion_patologia;

        $diagnostico->save();

        return view('diagnostico',compact('diagnostico'));
    }

    public function destroy($id)
    {
        $diagnostico = Diagnostico::findOrFail($id);
        $diagnostico->delete();

        return view('diagnostico',compact('diagnostico'));
    }
}
