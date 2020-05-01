<?php

namespace App\Http\Controllers;

use App\Diagnostico;
use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    public function index()
    {

        $diagnostico = Diagnostico::all();
        return view('diagnostico.index',compact('diagnostico'));

    }
    public function create()
    {
    	return view('diagnostico.index');
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
        $diagnostico->condicion = '1';

        $diagnostico->save();

        return redirect('diagnostico')->with('status','Se guardo Correctamente');
    }

    public function show(Diagnostico $diagnostico)
    {
        $diagnostico = Diagnostico::findOrFail($diagnostico);
        return view('diagnostico',compact('diagnostico'));
    }

    public function edit($id)
    {
        $diagnostico = Diagnostico::findOrFail($id);
        return view('diagnostico.editar',compact('diagnostico'));
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

        $diagnostico->update();
        return view('diagnostico.index',compact('diagnostico'));
    }

    public function destroy($id)
    {
        $diagnostico = Diagnostico::findOrFail($id);
        $diagnostico->delete();

        return redirect('diagnostico')->with('status','Se Elimino Correctamente');
    }
}
