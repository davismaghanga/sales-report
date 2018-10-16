@extends('layouts.user.master')

@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Institutions</h3>
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
                            <h2>My places of visit <small>Update at will</small></h2>
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


                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">

                                        <th class="column-title">Institution Name </th>
                                        <th class="column-title">Institution type </th>
                                        <th class="column-title">Activity done </th>
                                        <th class="column-title">Upcoming event </th>
                                        <th class="column-title">Outcome </th>
                                        <th class="column-title">Region </th>
                                        <th class="column-title">County </th>
                                        <th class="column-title">Orders received </th>
                                        <th class="column-title">Contact's Name </th>
                                        <th class="column-title">Contact's Designation </th>
                                        <th class="column-title">Contact's Phone Number </th>
                                        <th class="column-title">Email </th>
                                        <th class="column-title no-link last"><span class="nobr">Update institution details</span>
                                        <th class="column-title no-link last"><span class="nobr">View booklists</span></th>
                                        <th class="column-title no-link last"><span class="nobr">View KYC</span></th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($institutions as $institution)
                                    <tr class="even pointer">
                                        {{--@foreach($user->institutions as $institution)--}}
                                            <td class=""> {{$institution->institution_name}}</td>
                                            <td class=""> {{$institution->type}}</td>
                                            <td class=""> {{$institution->activity}}</td>
                                            <td class=""> {{$institution->upcoming}}</td>
                                            <td class=""> {{$institution->outcome}}</td>
                                            <td class=""> {{$institution->region->region}}</td>
                                        <td class=""> {{$institution->county->county}}</td>
                                            <td class=""> {{$institution->orders}}</td>
                                            <td class=""> {{$institution->contactName}}</td>
                                            <td class=""> {{$institution->contactDesignation}}</td>
                                            <td class=""> {{$institution->contactNumber}}</td>
                                            <td class=""> {{$institution->contactEmail}}</td>
                                        <td class="">  <a href="{{url('update/institution',$institution->id)}}"> <i class="fa fa-edit"></i></a></td>

                                        @if($institution->type=="Private Primary" && count($institution->booklists)!=0)
                                        <td class="">  <a href="{{url('institution/booklists',$institution->id)}}"> <i class="fa fa-book"></i></a></td>
                                            @else
                                            <td class="">  NOT APPLICABLE</td>
                                        @endif
                                        <td class="">  <a href="{{url('institution/KYC',$institution->id)}}"> <i class="fa fa-file-pdf-o"></i></a> </td>


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

