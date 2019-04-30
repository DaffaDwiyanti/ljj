<!-- Id Penugasan Field
<div class="form-group col-sm-6">
    {!! Form::label('id_penugasan', 'Id Penugasan:') !!}
    {!! Form::text('id_penugasan', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Id Materi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_materi', 'Materi:') !!}
    <select class="form-control" name="id_materi">
    @foreach($materis as $materi)
    <option value="{{$materi->id}}" disabled selected='selected'>{{$materi->materi}}</option>
        <option value="{{$materi->id}}">{{$materi->materi}}</option>
        @endforeach
    </select>

</div>

<!-- Isi Penugasan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isi_penugasan', 'Isi Penugasan:') !!}
    {!! Form::text('isi_penugasan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('penugasans.index') !!}" class="btn btn-default">Cancel</a>
</div>
