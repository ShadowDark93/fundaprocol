<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nit') }}
            {{ Form::number('Nit', $data->Nit, ['class' => 'form-control' . ($errors->has('Nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('Nit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Celular - WhatsApp') }}
            {{ Form::number('Cel', $data->Cel, ['class' => 'form-control' . ($errors->has('Cel') ? ' is-invalid' : ''), 'placeholder' => 'Cel']) }}
            {!! $errors->first('Cel', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Mision') }}
            {{ Form::textarea('Mision', $data->Mision, ['class' => 'form-control' . ($errors->has('Mision') ? ' is-invalid' : ''), 'placeholder' => 'Mision']) }}
            {!! $errors->first('Mision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Vision') }}
            {{ Form::textarea('Vision', $data->Vision, ['class' => 'form-control' . ($errors->has('Vision') ? ' is-invalid' : ''), 'placeholder' => 'Vision']) }}
            {!! $errors->first('Vision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Principios') }}
            {{ Form::textarea('Principios', $data->Principios, ['class' => 'form-control' . ($errors->has('Principios') ? ' is-invalid' : ''), 'placeholder' => 'Principios']) }}
            {!! $errors->first('Principios', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::email('Correo', $data->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Facebook') }}
            {{ Form::text('Facebook', $data->Facebook, ['class' => 'form-control' . ($errors->has('Facebook') ? ' is-invalid' : ''), 'placeholder' => 'Facebook']) }}
            {!! $errors->first('Facebook', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Instagram') }}
            {{ Form::text('Instagram', $data->Instagram, ['class' => 'form-control' . ($errors->has('Instagram') ? ' is-invalid' : ''), 'placeholder' => 'Instagram']) }}
            {!! $errors->first('Instagram', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Linkedin') }}
            {{ Form::text('Linkedin', $data->Linkedin, ['class' => 'form-control' . ($errors->has('Linkedin') ? ' is-invalid' : ''), 'placeholder' => 'Linkedin']) }}
            {!! $errors->first('Linkedin', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Youtube') }}
            {{ Form::text('Youtube', $data->Youtube, ['class' => 'form-control' . ($errors->has('Youtube') ? ' is-invalid' : ''), 'placeholder' => 'Youtube']) }}
            {!! $errors->first('Youtube', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Twitter') }}
            {{ Form::text('Twitter', $data->Twitter, ['class' => 'form-control' . ($errors->has('Twitter') ? ' is-invalid' : ''), 'placeholder' => 'Twitter']) }}
            {!! $errors->first('Twitter', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Actualizar Información</button>
    </div>
</div>

<br><br><br>
