@extends('layouts.admin.master')

@section('content')

    <div class="right_col" role="main">

        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update your profile picture </h2>
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


                    <div class="x_content ">
                        <br />
                        <form enctype="multipart/form-data" class="form-horizontal form-label-left input_mask" method="post" action="{{url('/admin/edit-profile/post')}}">
                            {{csrf_field()}}


                            {{-- weka pp hapa--}}
                            <div class=" form-group">
                                <input type="file" class="form-control" id="inputSuccess2" placeholder="Upload profile picture" name="avatar" required>
                            </div>
                            @if(count($errors->all()))

                                <div class="alert alert-danger">

                                    @foreach($errors->all() as $error)

                                        <ul>
                                            <li> {{$error}}</li>
                                        </ul>
                                    @endforeach
                                </div>


                            @endif

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection