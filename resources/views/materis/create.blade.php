@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Materi
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'materis.store']) !!}

                        @include('materis.fields')

                    {!! Form::close() !!}
                    <div class="form-group col-sm-6 {{ $errors->has('nama') ? 'has-danger' : ''}}">
                        {!! Form::label('nama', 'Name') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
