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
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Add City</h4>
        </div>

        <section class="hk-sec-wrapper">

            {!! Form::open(['method'=>'POST', 'action'=> 'CityController@store','files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('name', 'City:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('state_id', 'States:') !!}
                {!! Form::select('state_id', $state, null, ['class'=>'form-control']) !!}
                {{--{!! Form::select('state_id', [''=>'Choose State'] + $state , null, ['class'=>'form-control'])!!}--}}
            </div>

            <div class="form-group">
                {!! Form::submit('Add City', ['class'=>'btn btn-primary']) !!}
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



