<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Nombres', $staff->Nombres, ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('Apellidos', $staff->Apellidos, ['class' => 'form-control' . ($errors->has('Apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Cargo') }}
            {{ Form::text('Cargo', $staff->Cargo, ['class' => 'form-control' . ($errors->has('Cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('Cargo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $staff->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Foto') }} <br>
            {{ Form::file('Foto', $attributes=['class' => 'form-control' . ($errors->has('Foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto', 'accept' => 'image/*']) }}
            {!! $errors->first('Foto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Crear Adminitrativo</button>
    </div>
</div>
