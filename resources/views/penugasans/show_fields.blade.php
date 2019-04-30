<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $penugasan->id !!}</p>
</div>

<!-- Id Penugasan Field -->
<!-- <div class="form-group">
    {!! Form::label('id_penugasan', 'Id Penugasan:') !!}
    <p>{!! $penugasan->id_penugasan !!}</p>
</div> -->

<!-- Id Materi Field -->
<div class="form-group">
    {!! Form::label('id_materi', 'Materi:') !!}
    <p>{!! $penugasan->id_materi !!}</p>
</div>

<!-- Isi Penugasan Field -->
<div class="form-group">
    {!! Form::label('isi_penugasan', 'Isi Penugasan:') !!}
    <p>{!! $penugasan->isi_penugasan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $penugasan->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $penugasan->updated_at !!}</p>
</div>

