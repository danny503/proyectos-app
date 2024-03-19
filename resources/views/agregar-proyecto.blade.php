@extends('layouts.app')

@section('content')
<form action="{{route('proyectos.store')}}" method="POST" class="row g-3">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nombre del Proyecto</label>
      <input type="text" name="nombre_proyecto" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Fuente de Fondos</label>
      <input type="text" name="fuente_fondos" class="form-control">
    </div>
    <div class="col-4">
        <label class="form-label">Monto Planificado</label>
        <input type="number" step="any" name="monto_planificado" class="form-control">
      </div>
      <div class="col-4">
        <label class="form-label">Monto Patrocinado</label>
        <input type="number" step="any" name="monto_patrocinado" class="form-control">
      </div>
      <div class="col-4">
        <label class="form-label">Monto Fondos Propios</label>
        <input type="number" step="any" name="monto_fondos_propios" class="form-control">
      </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection