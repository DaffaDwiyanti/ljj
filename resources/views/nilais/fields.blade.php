<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userid', 'Userid:') !!}
    {!! Form::text('userid', null, ['class' => 'form-control']) !!}
</div>

<!-- Pretest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pretest', 'Pretest:') !!}
    {!! Form::text('pretest', null, ['class' => 'form-control']) !!}
</div>

<!-- Posttest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('posttest', 'Posttest:') !!}
    {!! Form::text('posttest', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('nilais.index') !!}" class="btn btn-default">Cancel</a>
</div>
