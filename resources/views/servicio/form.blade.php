<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre del servicio') }}
            {{ Form::text('Name', $servicio->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Descripción del servicio') }}
            {{ Form::textarea('Description', $servicio->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''),'rows'=>'5', 'placeholder' => 'Description']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
