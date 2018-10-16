@extends('layouts.admin.master')

@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Towns</h3>
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
                            <h2>Counties <small></small></h2>
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

                                        <th class="column-title">County Name </th>
                                        <th class="column-title no-link last"><span class="nobr">Region</span>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($counties as $county)
                                        <tr class="even pointer">
                                            {{--@foreach($user->institutions as $institution)--}}

<<<<<<< HEAD
                                            <td class=""> {{$county->county}}</td>
                                            <td class=""> {{$county->region->region}}</td>
=======
                                            <td class=""> {{$subregion->subregion}}</td>

                                            <td class="">  <a href="{{url('admin/update/subregion',$subregion->id)}}"> <i class="fa fa-edit"></i></a>
                                                &nbsp;  <a href=""> <i class="fa fa-trash"></i>  </a>
                                            </td>
>>>>>>> b961ba4572d3f0e37dd0714b8b81cec67cf141df

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

