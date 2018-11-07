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
           let url22='{{url('admin/view/getInstitutionTable2')}}';
           let u_id = '{{$msee->id}}'
           axios.post(url22,{'sub_county_id':id,'u_id':u_id})
               .then(function (response) {

                   $.each(response.data.institutions,function (key, value) {
                       console.log(value);
                       tabke.row.add([
                           value.id,
                           value.created_at,
                           value.institution_name,
                           value.type,
                           value.region.region,
                           value.county.county,
                           value.subcounty.subcounty,
                           value.contactName,
                           value.contactEmail,
                           value.contactDesignation,
                           value.contactNumber,
                           value.orders!=null ?
                           value.orders:
                           'None',
                           value.user.name,
                           value.booklists.length>0?
                            '<a href="'+'{{url('admin/institution/booklists')}}'+'/'+value.id+'">View BookLists</a>':
                               'Not applicable'
                           ,

                           value.kyc===null  || value.kyc===''?
                               'Not applicable':
                               '<a href="'+'{{url('admin/institution/kyc')}}'+'/'+value.id+'">View KYC</a>'

                   ,
                           value.report===null ||  value.report===''?
                               'Not applicable':
                               '<a href="'+'{{url('admin/institution/report')}}'+'/'+value.id+'">View Report</a>'

                           ,

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
            <div class="page-title">
                <div class="title_left">
                    <h3> Institutions  <small> recorded by <strong>{{$msee->name}} for the {{$msee->region->region}} region</strong></small>  </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <a class="btn btn-success" href="{{url('admin/view/profile/'.$msee->id)}}"><i class="fa fa-edit m-right-xs"></i>View Profile</a>

                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" placeholder="Search for...">--}}
                            {{--<span class="input-group-btn">--}}
                      {{--<button class="btn btn-default" type="button">Go!</button>--}}
                    {{--</span>--}}
                        {{--</div>--}}
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
                                    <th class="column-title"># </th>
                                    <th class="column-title">Created at  (YY-MM-DD) </th>
                                    <th class="column-title">Institution Name </th>
                                    <th class="column-title">Type of institution </th>
                                    <th class="column-title">Region </th>
                                    <th class="column-title">County </th>
                                    <th class="column-title">Sub-county </th>
                                    <th class="column-title">Contact Name </th>
                                    <th class="column-title">Contact Email </th>
                                    <th class="column-title">Contact Designation </th>
                                    <th class="column-title">Contact Number </th>
                                    <th class="column-title">Orders </th>
                                    <th class="column-title">Sales representative </th>
                                    <th class="column-title no-link last"><span class="nobr">Booklist</span>
                                    <th class="column-title no-link last"><span class="nobr">KYC</span>
                                    <th class="column-title no-link last"><span class="nobr">Report</span>
                                    </th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($institutions1 as $institution)
                                    <tr class="even pointer">
                                        {{--@foreach($user->institutions as $institution)--}}
                                        <td class=""> {{$institution->id}}</td>
                                        <td class=""> {{$institution->created_at}}</td>
                                        <td class=""> {{$institution->institution_name}}</td>
                                        <td class=""> {{$institution->type}}</td>
                                        <td class=""> {{$institution->region->region}}</td>
                                        <td class=""> {{$institution->county->county}}</td>
                                        <td class=""> {{$institution->subcounty->subcounty}}</td>
                                        <td class=""> {{$institution->contactName}}</td>
                                        <td class=""> {{$institution->contactEmail}}</td>
                                        <td class=""> {{$institution->contactDesignation}}</td>
                                        <td class=""> {{$institution->contactNumber}}</td>

                                        @if($institution->orders)

                                        <td class=""> {{$institution->orders}}</td>
                                        @else
                                            <td class="">None</td>
                                        @endif
                                            <td class=""> {{$institution->user->name}}</td>

                                        @if($institution->booklists->count()!=0)
                                        <td class=""><a href="{{url('admin/institution/booklists',$institution->id)}}"> <i class="fa fa-book"></i></a></td>
                                            @else
                                            <td class="">Not applicable</td>
                                        @endif

                                        @if($institution->kyc->count()!=0)
                                        <td ><a href="{{url('admin/institution/kyc',$institution->id)}}"> <i class="fa fa-file"> </i></a></td>
                                            @else
                                            <td class="">Not applicable</td>
                                            @endif

                                        @if($institution->report->count()!=0)
                                            <td ><a href="{{url('admin/institution/report',$institution->id)}}"> <i class="fa fa-file"> </i></a></td>
                                            @else
                                            <td class="">Not applicable</td>
                                            @endif
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

