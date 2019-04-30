<!-- Id Kelas Field -->

<!-- Nama Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kelas', 'Nama Kelas:') !!}
    {!! Form::text('nama_kelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::text('logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('kelas.index') !!}" class="btn btn-default">Cancel</a>
</div>
