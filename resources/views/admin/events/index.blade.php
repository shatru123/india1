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
            <h4 class="hk-pg-title"><span class="pg-title-icon">
                    <span class="feather-icon"><i data-feather="database"></i></span></span>Events</h4>
            <h5 class="hk-pg-title">
                <a href="{{route('events.create')}}"><span class="pg-title-icon"><span class="feather-icon">
                    <i data-feather="plus"></i></span></span>Add New
                </a>
            </h5>
        </div>

        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title"></h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">

                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=0;
                                ?>
                                @if($events)

                                    @foreach($events as $event)
                                        <tr>

                                            <td>{{++$no}}</td>

                                            <td>
                    <img src="{{$event->image ? asset('public/backend/images/events')."/".$event->image : 'http://placehold.it/400x400'}}" width="100px" height="100px"  class="table-hover"   />
                                            </td>
                                            <td>{{$event->title}}</td>
                                            <td>{{$event->location}}</td>
                                            <td>{{$event->date}}</td>
                                            <td>{{$event->time}}</td>
                                            <td>
                                                <a href="{{route('events.edit',$event->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>

                                                {!! Form::open(['method'=>'DELETE', 'action'=> ['EventController@destroy', $event->id]]) !!}



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
        </section>


    </div>

    {{--<script src="{{asset('public/backend/vendors/jquery/dist/jquery.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/dist/js/jquery.slimscroll.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>--}}
    {{--<script src="{{asset('public/backend/dist/js/dataTables-data.js')}}"></script>--}}
@endsection

