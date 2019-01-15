@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Colleges List</h4>
                <p class="card-description">
                    <a class="menu-icon mdi mdi-plus-circle" href="{{route('colleges.create')}}">Add new</a>
                    {{--<code>.table-striped</code>--}}
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>no</th>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>University</th>

                            <th>City</th>
                            <th>State</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $no=0; ?>
                        @if($colleges)

                            @foreach($colleges as $college)

                                <tr>
                                    <td>{{++$no}}</td>
                                    <td>
                                        <img src="{{$college->photo ? asset('public/backend/images/colleges')."/".$college->photo : 'http://placehold.it/400x400'}}" width="100px" height="100px"  class="table-hover"   />
                                    </td>
                                    <td>{{$college->institute_name}}</td>
                                    <td>{{$college->university_id}}</td>
                                    <td>{{$college->city['name']}}</td>
                                    <td>{{$college->state['name']}}</td>

                                    <td>
                                        <a href="{{route('colleges.edit',$college->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>

                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['CollegeController@destroy', $college->id]]) !!}



                                        {!! Form::button(' <i class="icon-trash txt-danger"></i>', ['type' => 'submit','class'=>'mr-25','data-toggle'=>"tooltip" ,'data-original-title'=>"Delete"]) !!}


                                        {!! Form::close() !!}


                                    </td>

                                </tr>

                            @endforeach

                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection