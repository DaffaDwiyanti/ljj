<table class="table table-responsive" id="soals-table">
    <thead>
        <tr>
            <!-- <th>Id Soal</th> -->
        <th>Id Materi</th>
        <th>Id Jawaban</th>
        <th>Soal</th>
        <th>Jenis Soal</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($soals as $soal)
        <tr>
            <!-- <td>{!! $soal->id_soal !!}</td> -->
            <td>{!! $soal->id_materi !!}</td>
            <td>{!! $soal->id_jawaban !!}</td>
            <td>{!! $soal->soal !!}</td>
            <td>{!! $soal->jenis_soal !!}</td>
            <td>
                {!! Form::open(['route' => ['soals.destroy', $soal->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('soals.show', [$soal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('soals.edit', [$soal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>