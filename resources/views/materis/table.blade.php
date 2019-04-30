<table class="table table-responsive" id="materis-table">
    <thead>
        <tr>
            <th>Id Materi</th>
        <th>Id Tutor</th>
        <th>Id Admin</th>
        <th>Materi</th>
        <th>Logo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($materis as $materi)
        <tr>
            <td>{!! $materi->id_materi !!}</td>
            <td>{!! $materi->id_tutor !!}</td>
            <td>{!! $materi->id_admin !!}</td>
            <td>{!! $materi->materi !!}</td>
            <td>{!! $materi->logo !!}</td>
            <td>
                {!! Form::open(['route' => ['materis.destroy', $materi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('materis.show', [$materi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('materis.edit', [$materi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>