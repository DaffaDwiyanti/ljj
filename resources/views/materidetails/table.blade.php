<table class="table table-responsive" id="materidetails-table">
    <thead>
        <tr>
            <th>Id Materi</th>
        <th>Subbab</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($materidetails as $materidetail)
        <tr>
            <td>{!! $materidetail->id_materi !!}</td>
            <td>{!! $materidetail->subbab !!}</td>
            <td>
                {!! Form::open(['route' => ['materidetails.destroy', $materidetail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('materidetails.show', [$materidetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('materidetails.edit', [$materidetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>