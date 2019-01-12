@extends('layouts.main')
@section('content')



    <section>
    <div class="spacing no-spacing">
    <div class="row mrg">
    <div class="col-md-6 col-sm-12 col-lg-6">

    <i class="fa fa-play-circle theme-bg brd-rd50"></i>
    <div class="quote-info">

    </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-12 col-lg-6">

    <div class="title1">

    </div>

    </div>
    </div>
    </div>
    </div>

        <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br>
        <br>
    </section>



    <section>
        <div class="spacing gray-bg ">
            <div class="container">
                <div class="row">



                    <div class="container">

                        <!-- Title -->
                        <div class="hk-pg-header">
                            <h4 class="hk-pg-title">
                                <span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Fill Application Form</h4>
                        </div>

                        <section class="hk-sec-wrapper">

                            {!! Form::open(['method'=>'POST', 'action'=> 'JobController@store','files'=>true]) !!}

                            <div align="center"><h4>Basic Details</h4></div>
                            <div class="form-group">
                                {!! Form::label('f_name', 'First Name:') !!}
                                {!! Form::text('name', null, ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('m_name', 'Middle Name:') !!}
                                {!! Form::text('name', null, ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('l_name', 'Last Name:') !!}
                                {!! Form::text('name', null, ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('dob', 'Date Of Birth:') !!}
                                {!! Form::date('dob', null, ['class'=>'form-control'])!!}
                            </div>

                            {{--<div class="form-group">--}}
                                {{--{!! Form::label('type', 'Type:') !!}--}}
                                {{--{!! Form::select('type', array('MP'=>'MP','MLA'=>'MLA'), null , ['class'=>'form-control'])!!}--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--{!! Form::label('party', 'Party:') !!}--}}
                                {{--{!! Form::text('party', null, ['class'=>'form-control'])!!}--}}
                            {{--</div>--}}


                            <div class="form-group">
                                {!! Form::label('photo', 'Photo:') !!}
                                {!! Form::file('photo', null,['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::email('email', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('mobile', 'Mobile:') !!}
                                {!! Form::number('mobile', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('gender', 'Gender:') !!}
                                {!! Form::select('gender', array('male'=>'Male','Female'=>  'Female'), null , ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('mother_tounge', 'Mother Tounge:') !!}
                                {!! Form::select('mother_tounge', array('marathi'=>'Marathi','hindi'=>  'Hindi','english'=>  'English'), null , ['class'=>'form-control'])!!}
                            </div>

                            <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
                            <div class="form-group">
                                {!! Form::label('address', 'Address:') !!}
                                {!! Form::textarea('address', null, ['class'=>'form-control','id'=>'address'])!!}
                            </div>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#address' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>


                            <div class="form-group">
                                {!! Form::label('state_id', 'State:') !!}
                                {!! Form::select('state_id',array('state'=>'Maharashtra'), null, ['class'=>'form-control']) !!}
                            </div>

                            {{--<div class="form-group">--}}
                                {{--{!! Form::label('city_id', 'City:') !!}--}}
                                {{--{!! Form::select('city_id',array('city'=>'Male'),  null, ['class'=>'form-control']) !!}--}}

                            {{--</div>--}}

                            <div class="form-group">
                            {!! Form::label('city', 'City:') !!}
                            {!! Form::text('city', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                            {!! Form::label('district', 'District:') !!}
                            {!! Form::text('district', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('pin', 'Pincode:') !!}
                                {!! Form::text('pin', null, ['class'=>'form-control'])!!}
                            </div>

                            <div align="center"><h4>Documents</h4></div>

                            <div class="form-group">
                                {!! Form::label('pan', 'Pan:') !!}
                                {!! Form::select('pan',array('y'=>'Yes','n'=>'No'), null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('adhar', 'Adhar:') !!}
                                {!! Form::select('adhar',array('y'=>'Yes','n'=>'No'), null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('def', 'Defense:') !!}
                                {!! Form::select('def',array('y'=>'Yes','n'=>'No'), null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('ph', 'Physically Handicap :') !!}
                                {!! Form::select('ph',array('y'=>'Yes','n'=>'No'), null, ['class'=>'form-control']) !!}
                            </div>

                            <div align="center"><h4>Other Information</h4></div>
                            <div class="form-group">
                                {!! Form::label('is_agry', 'Agriculture Background :') !!}
                                {!! Form::select('is_agry',array('y'=>'Yes','n'=>'No'), null, ['class'=>'form-control']) !!}
                            </div>

                            <div align="center"><h4>Education Details</h4></div>
                            <div class="form-group">
                                {!! Form::label('education', 'Education:') !!}
                                {!! Form::select('education',array('primary'=>'Primary','secondary'=>'Secondary','higer_sec'=>'Higher Secondary','graduation'=>'Graduation'), null, ['class'=>'form-control']) !!}
                            </div>


                            <div class="form-group">
                                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
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




                </div>







                </div>


            </div>

    </section>


@endsection