<table class="table table-responsive" id="penugasans-table">
    <thead>
        <tr>
            <!-- <th>Id Penugasan</th> -->
        <th>Id Materi</th>
        <th>Isi Penugasan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($penugasans as $penugasan)
        <tr>
            <!-- <td>{!! $penugasan->id_penugasan !!}</td> -->
            <td>{!! $penugasan->id_materi !!}</td>
            <td>{!! $penugasan->isi_penugasan !!}</td>
            <td>
                {!! Form::open(['route' => ['penugasans.destroy', $penugasan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('penugasans.show', [$penugasan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('penugasans.edit', [$penugasan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>