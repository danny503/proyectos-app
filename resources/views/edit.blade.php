@extends('layouts.app')

@section('content')
<form action="{{route('proyectos.update', $proyecto)}}" method="POST" class="row g-3">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Nombre del Proyecto</label>
      <input type="text" name="nombre_proyecto" class="form-control" value="{{$proyecto->nombre_proyecto}}">
        @error('nombre_proyecto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Fuente de Fondos</label>
      <input type="text" name="fuente_fondos" class="form-control" value="{{$proyecto->fuente_fondos}}">
      @error('fuente_fondos')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-4">
        <label class="form-label">Monto Planificado</label>
        <input type="number" step="any" name="monto_planificado" class="form-control" value="{{$proyecto->monto_planificado}}">
        @error('monto_planificado')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-4">
        <label class="form-label">Monto Patrocinado</label>
        <input type="number" step="any" name="monto_patrocinado" class="form-control" value="{{$proyecto->monto_patrocinado}}">
        @error('monto_patrocinado')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-4">
        <label class="form-label">Monto Fondos Propios</label>
        <input type="number" step="any" name="monto_fondos_propios" class="form-control" value="{{$proyecto->monto_fondos_propios}}">
        @error('monto_fondos_propios')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection