@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Materidetail
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($materidetail, ['route' => ['materidetails.update', $materidetail->id], 'method' => 'patch']) !!}

                        @include('materidetails.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection