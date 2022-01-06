<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $legale->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Doc') }}
            {{ Form::text('Doc', $legale->Doc, ['class' => 'form-control' . ($errors->has('Doc') ? ' is-invalid' : ''), 'placeholder' => 'Doc']) }}
            {!! $errors->first('Doc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('State') }}
            {{ Form::text('State', $legale->State, ['class' => 'form-control' . ($errors->has('State') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('State', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>