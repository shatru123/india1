@extends('admin.layouts.main')

@section('content')


    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container">

        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title">
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Add State</h4>
        </div>

        <section class="hk-sec-wrapper">

            {!! Form::model($state, ['method'=>'PATCH', 'action'=> ['StateController@update', $state->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'State:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add State', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

                 {!! Form::open(['method'=>'DELETE', 'action'=> ['StateController@destroy', $state->id]]) !!}


                                  <div class="form-group">
                                     {!! Form::submit('Delete State', ['class'=>'btn btn-danger col-sm-6']) !!}
                                  </div>

                  {!! Form::close() !!}

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
    </div>


@endsection
