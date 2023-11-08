@extends('layouts.app')

@section('template_title')
    {{ $incidente->name ?? "{{ __('Show') Incidente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Incidente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('incidentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $incidente->area }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Involucrado:</strong>
                            {{ $incidente->equipo_involucrado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $incidente->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Solucion:</strong>
                            {{ $incidente->horas_solucion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
