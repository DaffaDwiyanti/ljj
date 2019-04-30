<!-- Id Materi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_materi', 'Id Admin:') !!}
    <select class="form-control" name="id_admin">
        @foreach($admins as $admin)
            <option value="{{$admin->id}}">{{$admin->name}}</option>
        @endforeach
    </select>
</div>

<!-- Id Tutor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tutor', 'Id Tutor:') !!}
    <select class="form-control" name="id_tutor">
        @foreach($tutors as $tutor)
            <option value="{{$tutor->id}}">{{$tutor->name}}</option>
        @endforeach
    </select>
</div>

<!-- Materi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materi', 'Materi:') !!}
    {!! Form::text('materi', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::text('logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('materis.index') !!}" class="btn btn-default">Cancel</a>
</div>
