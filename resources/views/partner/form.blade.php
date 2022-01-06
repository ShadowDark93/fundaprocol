<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $partner->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('Url', $partner->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $partner->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $partner->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Imagen') }} <br>
            {{ Form::file('Imagen', $attributes = ['class' => 'form-control' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen', 'accept' => 'image/*']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
