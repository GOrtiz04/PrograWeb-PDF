<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $incidente->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('equipo_involucrado') }}
            {{ Form::text('equipo_involucrado', $incidente->equipo_involucrado, ['class' => 'form-control' . ($errors->has('equipo_involucrado') ? ' is-invalid' : ''), 'placeholder' => 'Equipo Involucrado']) }}
            {!! $errors->first('equipo_involucrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $incidente->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas_solucion') }}
            {{ Form::text('horas_solucion', $incidente->horas_solucion, ['class' => 'form-control' . ($errors->has('horas_solucion') ? ' is-invalid' : ''), 'placeholder' => 'Horas Solucion']) }}
            {!! $errors->first('horas_solucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>