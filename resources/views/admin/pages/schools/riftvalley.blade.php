@extends('layouts.admin.master')
@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="row">
                <div class="col-md-6">
                        <div class="title_left">
                            <h1> Schools  in Rift Valley Region</h1>
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="title_right">
                        <div class="colmd-4">
                            <div class="title_right">
                                <div class="input-group">
                                    <label for="excel" style="color: green;">
                                        Import Excel File</label>
                                </div>

                                <form method="post" action="{{url('admin/rift/import')}}" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="file" name="riftImport"  required="required">
                                            {{csrf_field()}}

                                            <button  class="btn btn-success"  type="submit">Import R.Valley Schools </button>
                                            @if(count($errors->all()))
                                                <div class="alert alert-danger">
                                                    @foreach($errors->all() as $error)
                                                        <ul>
                                                            <li> {{$error}}</li>
                                                        </ul>
                                                    @endforeach
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

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
                                    <th class="column-title">School Name </th>
                                    <th class="column-title">County </th>

                                </tr>
                                </thead>


                                <tbody>
                                @foreach($schools as $school)
                                    <tr class="even pointer">
                                        <td class=""> {{$school->name}}</td>
                                        <td class=""> {{$school->county}}</td>
                                    </tr>
                                @endforeach

                                {{$schools->links()}}


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

