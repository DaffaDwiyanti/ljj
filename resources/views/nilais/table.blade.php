<table class="table table-responsive" id="nilais-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Pretest</th>
        <th>Posttest</th>
        <th>Komprehensif</th>
        <th>Penugasan</th>
        <th>Id Materi</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($nilais as $nilai)
        <tr>
            <td>{!! $nilai->userid !!}</td>
            <td>{!! $nilai->pretest !!}</td>
            <td>{!! $nilai->posttest !!}</td>
            <td>{!! $nilai->komprehensif !!}</td>
            <td>{!! $nilai->penugasan !!}</td>
            <td>{!! $nilai->id_materi !!}</td>
            <td>
                {!! Form::open(['route' => ['nilais.destroy', $nilai->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('nilais.show', [$nilai->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('nilais.edit', [$nilai->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>