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
            window.tabke=  $('#datatable').DataTable();
        });


        function getSubCounty(id) {
            var url='{{url('admin/view/sub_counties_json')}}';
            axios.post(url,{'county_id':id})
                .then(function (response) {
                    $('#subcounty').empty();
                    $('#subcounty').append('<option disabled selected>Please select a sub county</option>');

                    $.each(response.data.sub_counties,function (key, value) {
                        $('#subcounty').append("<option value='"+value.id+"'>"+value.subcounty+"</option>");

                    });
                    // console.log(response.data.sub_counties);
                })
        }

        function getTable(id) {
            tabke.clear().draw();
            let url22='{{url('admin/view/get_institution_table')}}';
            axios.post(url22,{'sub_county_id':id})
                .then(function (response) {

                    $.each(response.data.institutions,function (key, value) {
                        tabke.row.add([
                            value.institution_name,
                            value.type,
                            value.region.region,
                            value.county.county,
                            value.subcounty.subcounty,
                            value.orders!=null ?
                                value.orders:
                                'None',
                            value.contactName,

                            value.contactEmail!=null?value.contactEmail:'N/A',

                            value.contactDesignation,
                            value.contactNumber,
                            value.created_at,
                            value.user.name,

                        ]);

                    });
                    tabke.draw();
                })
        }
    </script>
@endsection

@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="row">
                <div class="col-md-6">
                    {{--<div class="page-title">--}}
                        <div class="title_left">
                            <h1> Institutions  in Rift Valley Region</h1>
                            <h2>Manager incharge:
                                @if($manager==null)

                                    No manager assigned yet
                                @else
                                    {{$manager->name}}
                                @endif

                            </h2>
                            <h3>Total Number of sales-reps: {{count($sellers)}}</h3>
                        </div>

                </div>
                <div class="col-md-6">
                    <div class="title-right">
                        <div class="align-content-center">
                            <div class="input-group">
                                <label for="excel" style="color: green;">
                                    Export to Excel</label>
                            </div>
                        </div>
                        <form method="post" action="{{url('admin/rift/excel')}}" class="form-horizontal">
                            {{--<fieldset>--}}
                            @csrf
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                        <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Export to Excel</button>
                        </form>
                    </div>

                </div>

                </div>

            </div>



            <div class="clearfix"></div>

            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">

                    <label for="county">County:</label>
                    <select class="form-control" name="" id="county"  onchange="getSubCounty(this.value)">
                        <option selected disabled>Please select a county</option>
                        @foreach($counties as $county)
                            <option value="{{$county->id}}">{{$county->county}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <label for="subcounty"> Sub-county:</label>

                    <select class="form-control" name="" id="subcounty" onchange="getTable(this.value)">

                    </select>
                </div>
            </div>

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
                                    <th class="column-title">Institution Name </th>
                                    <th class="column-title">Type of institution </th>
                                    <th class="column-title">Region </th>
                                    <th class="column-title">County </th>
                                    <th class="column-title">Sub-county </th>
                                    <th class="column-title">Orders (Kshs) </th>
                                    <th class="column-title">Contact Name </th>
                                    <th class="column-title">Contact Email </th>
                                    <th class="column-title">Contact Designation </th>
                                    <th class="column-title">Contact Number </th>
                                    <th class="column-title">Created at  (YY-MM-DD) </th>
                                    <th class="column-title">Sales representative </th>
                                    </th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($institutions as $institution)
                                    <tr class="even pointer">
                                        {{--@foreach($user->institutions as $institution)--}}

                                        <td class=""> {{$institution->institution_name}}</td>
                                        <td class=""> {{$institution->type}}</td>
                                        <td class=""> {{$institution->region->region}}</td>
                                        <td class=""> {{$institution->county->county}}</td>
                                        <td class=""> {{$institution->subcounty->subcounty}}</td>

                                        @if($institution->orders==null)
                                            <td class=""> No orders taken</td>
                                        @else
                                            <td class=""> {{$institution->orders}}</td>
                                        @endif
                                        <td class=""> {{$institution->contactName}}</td>


                                        @if($institution->contactEmail==null)
                                            <td class=""> Not Applicable</td>
                                        @else
                                            <td class=""> {{$institution->contactEmail}}</td>

                                        @endif
                                        <td class=""> {{$institution->contactDesignation}}</td>
                                        <td class=""> {{$institution->contactNumber}}</td>
                                        <td class=""> {{$institution->created_at}}</td>
                                        <td class=""> {{$institution->user->name}}</td>


                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    
@endsection

