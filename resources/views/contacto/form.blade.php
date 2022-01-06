<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            @if ($contacto->estado == 1)
                <h5>Estado: Sin Respuesta</h5>
            @else
                <h5>Estado: Respondido</h5>
            @endif
        </div>

        <div class="form-group">
            <h5>Nombres: {{ $contacto->Nombres }}</h5>
        </div>

        <div class="form-group">
            <h5>Correo: {{ $contacto->Correo }}</h5>
        </div>

        <div class="form-group">

            <h5>Título: {{ $contacto->Titulo }}</h5>

        </div>
        
        <div class="form-group">

           <h5 align="justify">Descripción: {{ $contacto->Descripcion }}</h5>

        </div>
        <div class="form-group">
            {{ Form::label('Respuesta') }}
            {{ Form::textarea('Respuesta', $contacto->Respuesta, ['class' => 'form-control' . ($errors->has('Respuesta') ? ' is-invalid' : ''), 'placeholder' => 'Respuesta']) }}
            {!! $errors->first('Respuesta', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
