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
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span>
                </span>Add Event Details</h4>
        </div>

        <section class="hk-sec-wrapper">

            {!! Form::model($ads, ['method'=>'PATCH', 'action'=> ['AdsController@update', $ads->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('location', 'Location:') !!}
                {!! Form::text('location', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Link:') !!}
                {!! Form::text('link', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('image', 'Image:') !!}
                {!! Form::file('image', null,['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control','id'=>'description'])!!}
            </div>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#description' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>



            <div class="form-group">
                {!! Form::submit('Update Ads', ['class'=>'btn btn-primary']) !!}
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








