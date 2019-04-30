<!-- Id Materi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_materi', 'Id Materi:') !!}
    {!! Form::text('id_materi', null, ['class' => 'form-control']) !!}
</div>

<!-- Subbab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subbab', 'Subbab:') !!}
    {!! Form::text('subbab', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('materidetails.index') !!}" class="btn btn-default">Cancel</a>
</div>
