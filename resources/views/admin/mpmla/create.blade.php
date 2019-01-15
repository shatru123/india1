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
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Add Leader Details</h4>
        </div>

        <section class="hk-sec-wrapper">

            {!! Form::open(['method'=>'POST', 'action'=> 'MpmlaController@store','files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('type', 'Type:') !!}
                {!! Form::select('type', array('MP'=>'MP','MLA'=>'MLA'), null , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('party', 'Party:') !!}
                {!! Form::text('party', null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('photo', 'Photo:') !!}
                {!! Form::file('photo', null,['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('gender', 'Gender:') !!}
                {!! Form::select('gender', array('male'=>'Male','Female'=>  'Female'), null , ['class'=>'form-control'])!!}
            </div>

            <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
            <div class="form-group">
                {!! Form::label('history', 'History:') !!}
                {!! Form::textarea('history', null, ['class'=>'form-control','id'=>'history'])!!}
            </div>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#history' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <div class="form-group">
                {!! Form::label('works', 'Work:') !!}
                {!! Form::textarea('works', null, ['class'=>'form-control','id'=>'works'])!!}
            </div>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#works' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <div class="form-group">
                {!! Form::label('bio', 'BIO:') !!}
                {!! Form::textarea('bio', null, ['class'=>'form-control','id'=>'bio'])!!}
            </div>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#bio' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>


            <div class="form-group">
                {!! Form::label('state_id', 'State:') !!}
                {!! Form::select('state_id', $state, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('city_id', 'City:') !!}
                {!! Form::select('city_id', $city, null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::submit('Add Leader', ['class'=>'btn btn-primary']) !!}
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












