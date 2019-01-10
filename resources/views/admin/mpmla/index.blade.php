@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">MPMLA List</h4>
                <p class="card-description">
                    <a class="menu-icon mdi mdi-plus-circle" href="{{route('mpmla.create')}}">Add new</a>
                    {{--<code>.table-striped</code>--}}
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>no</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Party</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Avrage Rating</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
<?php  $no=0; ?>
                        @if($mpmla)

                            @foreach($mpmla as $mpmlas)

                                <tr>
                                    <td>{{++$no}}</td>
                                    <td>
                                        <img src="{{$mpmlas->photo ? asset('public/backend/images/leaders')."/".$mpmlas->photo : 'http://placehold.it/400x400'}}" width="100px" height="100px"  class="table-hover"   />
                                    </td>
                                    <td>{{$mpmlas->name}}</td>
                                    {{--<td>{!!html_entity_decode($mpmlas->address)!!}</td>--}}
                                    <td>{{$mpmlas->type}}</td>
                                    <td>{{$mpmlas->party}}</td>
                                    <td>{{$mpmlas->city['name']}}</td>
                                    <td>{{$mpmlas->state['name']}}</td>
                                    <td>{{$mpmlas->avg_rating}}</td>
                                    <td>
                                        <a href="{{route('mpmla.edit',$mpmlas->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>

                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['MpmlaController@destroy', $mpmlas->id]]) !!}



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