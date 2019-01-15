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
                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Add College Details</h4>
        </div>

        <section class="hk-sec-wrapper">

            {!! Form::open(['method'=>'POST', 'action'=> 'CollegeController@store','files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('institute_name', 'Institute Name:') !!}
                {!! Form::text('institute_name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('photo', 'Logo:') !!}
                {!! Form::file('photo', null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('program', 'Program:') !!}
                {!! Form::select('program', array('1'=>'Engineering And Technology','2'=>'Other'), null , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('shift', 'Shift:') !!}
                {!! Form::select('shift', array('1'=>'First','2'=>'Second','3'=>'both'), null , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('timing', 'P/F Time:') !!}
                {!! Form::select('timing', array('1'=>'Part Time','2'=>'Full','3'=>'both'), null , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('level_of_course', 'Level OF Course:') !!}
                {!! Form::select('level_of_course', array('1'=>'Under Graduate','2'=>'Graduate','3'=>'Post Graduate'), null , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('courses', 'Courses:') !!}
                {!! Form::select('courses', array('1'=>'IT','2'=>'COMPUTER','3'=>'Mechanical'), null , ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('university_id', 'University:') !!}
                {!! Form::select('university_id', array('1'=>'SPPU','2'=>'GSBAU','3'=>'MSBTE'), null , ['class'=>'form-control'])!!}
            </div>


             <div class="form-group">
                {!! Form::label('nacc_grade', 'Nacc Grade:') !!}
                {!! Form::select('nacc_grade', array('1'=>'A+','2'=>'A','3'=>'B+','3'=>'B','3'=>'C+','3'=>'C'), null , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('nacc_grade', 'Nacc Grade:') !!}
                {!! Form::select('nacc_grade', array('1'=>'A+','2'=>'A','3'=>'B+','3'=>'B','3'=>'C+','3'=>'C'), null , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('state_id', 'State:') !!}
                {!! Form::select('state_id', $state, null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('city_id', 'City:') !!}
                {!! Form::select('city_id', $city, null, ['class'=>'form-control']) !!}

            </div>


            <div class="form-group">
                {!! Form::label('website', 'Website:') !!}
                {!! Form::text('website', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('established_year', 'established_year:') !!}
                {!! Form::text('established_year', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add College Details', ['class'=>'btn btn-primary']) !!}
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












