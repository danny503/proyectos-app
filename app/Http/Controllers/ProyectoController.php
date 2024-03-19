<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;

//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;


class ProyectoController extends Controller
{
    public function index() {
        $proyectos = Proyecto::latest()->get();
        return view('proyectos', compact('proyectos'));
    }

    public function create() {
        return view('agregar-proyecto');
    }
    public function store(Request $request, Proyecto $proyecto) {
        $validacion = $request->validate([
            'nombre_proyecto'=>['required', 'min:3'],
            'fuente_fondos'=>['required', 'max:250'],
            'monto_planificado'=>['required', 'numeric'],
            'monto_patrocinado'=>['required', 'numeric'],
            'monto_fondos_propios'=>['required', 'numeric'],
        ]);

        $proyecto->create($validacion);

        return redirect()->route('proyectos.index')->with('estado', 'El proyecto se ha guardado con exitó');
    }
     public function edit(Proyecto $proyecto) {
        return view('edit', compact('proyecto'));
     }

     public function update(Request $request, Proyecto $proyecto) {
        $validacion = $request->validate([
            'nombre_proyecto'=>['required', 'min:3'],
            'fuente_fondos'=>['required', 'max:250'],
            'monto_planificado'=>['required', 'numeric'],
            'monto_patrocinado'=>['required', 'numeric'],
            'monto_fondos_propios'=>['required', 'numeric'],
        ]);

        $proyecto->update($validacion);

        return redirect()->route('proyectos.index')->with('estado', 'Se ha actualizado con exitó');
     }

     public function destroy(Proyecto $proyecto) {
        $proyecto->delete();

        return redirect()->route('proyectos.index')->with('estado', 'Se ha eliminado con exitó');
     }

     public function verPDF() {
        $date = Carbon::now();

        $proyectos = Proyecto::latest()->get();
        $pdf = PDF::loadView('proyectosPdf', compact('proyectos', 'date'));
        return $pdf->stream('prueba.pdf');
     }
}
