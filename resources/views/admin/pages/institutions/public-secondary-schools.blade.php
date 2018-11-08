@extends('layouts.admin.master')
@section('scripts')
    <!-- Datatables -->
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <script>
        // $(function () {
        //     $('#datatable').DataTable();
        // })
        $(document).ready(function () {
            $('#datatable').DataTable();
        })

    </script>
@endsection

@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Public Secondary Schools  </h3>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
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

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="column-title"># </th>
                                    <th class="column-title">Institution Name </th>
                                    <th class="column-title">Activity </th>
                                    <th class="column-title">Upcoming </th>
                                    <th class="column-title">Outcome </th>
                                    <th class="column-title">Orders <small>(if any) </small></th>
                                    <th class="column-title">Region </th>
                                    <th class="column-title">Town <small>(subregion)</small> </th>
                                    <th class="column-title">Contact Name </th>
                                    <th class="column-title">Contact Email </th>
                                    <th class="column-title">Contact Designation </th>
                                    <th class="column-title">Contact Number </th>
                                    <th class="column-title">Sales Representative </th>
                                    </th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($pubsschools as $pubsschool)
                                    <tr class="even pointer">
                                        {{--@foreach($user->institutions as $institution)--}}

                                        <td class=""> {{$pubsschool->id}}</td>
                                        <td class=""> {{$pubsschool->institution_name}}</td>
                                        <td class=""> {{$pubsschool->activity}}</td>
                                        <td class=""> {{$pubsschool->upcoming}}</td>
                                        <td class=""> {{$pubsschool->outcome}}</td>

                                        @if($pubsschool->orders != null)
                                            <td class=""> {{$pubsschool->orders}}</td>
                                        @else
                                            <td class="">No orders taken</td>


                                        @endif
                                        <td class=""> {{$pubsschool->region->region}}</td>
                                        <td class=""> {{$pubsschool->county->county}}</td>
                                        <td class=""> {{$pubsschool->contactName}}</td>

                                        @if($pubsschool->contactEmail!=null)
                                            <td class=""> {{$pubsschool->contactEmail}}</td>
                                        @else
                                            <td class="">N/A</td>
                                        @endif
                                        <td class=""> {{$pubsschool->contactDesignation}}</td>
                                        <td class=""> {{$pubsschool->contactNumber}}</td>
                                        <td class=""> {{$pubsschool->user->name}}</td>

                                        </td>
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
@endsection

