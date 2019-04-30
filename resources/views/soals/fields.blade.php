<!-- Id Soal Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('id_soal', 'Id Soal:') !!}
    {!! Form::text('id_soal', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Id Materi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_materi', 'Materi:') !!}
    <select class="form-control" name="id_materi">
    @foreach($materis as $materi)
        @if(isset($soal->id_materi))
        <option value="{{$materi->id}}" {{($materi->id == $soal->id_materi ? 'selected=selected' : '')}}>{{$materi->materi}}</option>
        @else
        <option value="{{$materi->id}}">{{$materi->materi}}</option>
        @endif
    @endforeach
    </select>
</div>

<!-- Id Jawaban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jawaban', 'Jawaban:') !!}
    {!! Form::text('id_jawaban', null, ['class' => 'form-control']) !!}
</div>

<!-- Soal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('soal', 'Soal:') !!}
    {!! Form::text('soal', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Soal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_soal', 'Jenis Soal:') !!}
    <select class="form-control" name="jenis_soal">
    
        <option value="{{$soal->jenis_soal}}" disabled selected='selected'>{{$soal->jenis_soal}}</option>
        <option value="MultipleChoice">Multiple Choice</option>
        <option value="Quiz">Quiz</option>
        <option value="PreTest">PreTest</option>
        <option value="PostTest">PostTest</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('soals.index') !!}" class="btn btn-default">Cancel</a>
</div>
