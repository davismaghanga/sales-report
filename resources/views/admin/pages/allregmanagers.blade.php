@extends('layouts.admin.master')

@section('content')

    <div class="right_col" role="main">
        <div id="delete-modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Remove admin </h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="" id="delete-link" role="button" class="btn btn-primary">Remove</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Regional Managers</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">



                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> All Regional Managers <small>Update at will</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">

                            {{--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>--}}

                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">

                                        <th class="column-title">Regional Manager's Name </th>
                                        <th class="column-title">Email </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($regional_managers as $regional_manager)
                                        <tr class="even pointer">
                                            {{--@foreach($user->institutions as $institution)--}}
                                            @if(Auth::user()->id == $regional_manager->id)
                                                <td class=""> {{$regional_manager->name}}</td>
                                                <td class=""> {{$regional_manager->email}}</td>
                                                <td class=""> <a> <i class="fa fa-user-times"></i> </a></td>
                                                @else
                                                <td class=""> {{$regional_manager->name}}</td>
                                                <td class=""> {{$regional_manager->email}}</td>
                                                <td class=""> <button type="button" class="btn btn-primary" onclick="openDeleteModal({{$regional_manager->id}})"> <i class="fa fa-trash"></i> </button></td>
                                                {{--<td class=""> <a href="{{url('admin/delete/admin',$regional_manager->id)}}"> <i class="fa fa-trash"></i> </a></td>--}}
                                            @endif


                                            {{--@endforeach--}}
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function openDeleteModal(id) {
            var url = '{{url('admin/delete/admin')}}'+"/"+id

            $('#delete-modal').modal('show');
            $('#delete-link').attr('href',url);

        }
    </script>
    @endsection

