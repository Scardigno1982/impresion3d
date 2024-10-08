@extends('layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalles de la Máquina</h1>

    <div class="mb-3">
        <strong>Nombre:</strong>
        <p>{{ $maquina->nombre }}</p>
    </div>
    <div class="mb-3">
        <strong>Fecha de Compra:</strong>
        <p>{{ $maquina->fecha_compra }}</p>
    </div>
    <div class="mb-3">
        <strong>Vida Útil (Años):</strong>
        <p>{{ $maquina->vida_util_anios }}</p>
    </div>
    <div class="mb-3">
        <strong>Costo en UDS:</strong>
        <p>{{ $maquina->costo }}</p>
    </div>

    <div class="mb-3">
        <strong>Consumo de Energia por hora en watts:</strong>
        <p>{{ $maquina->wats_consumidas_por_hora }}</p>
    </div>
    
    <div class="mb-3">
        <strong>Intervalo de Servicio (Horas):</strong>
        <p>{{ $maquina->intervalo_servicio_horas }}</p>
    </div>
    <div class="mb-3">
        <strong>Costo de Servicio en UDS:</strong>
        <p>{{ $maquina->costo_servicio }}</p>
    </div>

    <a href="{{ route('maquinas.index') }}" class="btn btn-secondary">Volver</a>
</div>
<p>*Intervalo de Servicio, cantidad de horas que tiene que pasar para realizar un mantenimiento.</p>

@endsection
