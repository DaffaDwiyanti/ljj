@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Penugasan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($penugasan, ['route' => ['penugasans.update', $penugasan->id], 'method' => 'patch']) !!}

                        @include('penugasans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection