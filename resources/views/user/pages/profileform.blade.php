@extends('layouts.user.master')

@section('content')

    <div class="right_col" role="main">

    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Update your profile <small>Tell us more about yourself</small></h2>
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
                    <form enctype="multipart/form-data" class="form-horizontal form-label-left input_mask" method="post" action="{{url('edit-profile/post')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="id"   value="{{old('id')}}">
                        @if(count($errors)>0)
                        <div class="alert alert-danger">

                            @foreach($errors->all() as $error)

                                <ul>
                                    <li> {{$error}}</li>
                                </ul>

                            @endforeach
                        </div>

                        @endif


                        {{-- weka pp hapa--}}
                        <div class=" form-group">
                            <input type="file"  value="{{old('avatar')}}"  class="form-control" id="inputSuccess2" placeholder="Upload profile picture" name="avatar">
                            {{--<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>--}}
                        </div>


                        <div class=" form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5"  required="required" placeholder="Phone" data-inputmask="'mask' : '(999) 999-9999'" name="contacts" value="{{old('contacts')}}">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class=" form-group has-feedback">
                            <input type="text" class="form-control"  required="required" id="inputSuccess5" placeholder="Where do you stay? (village/ward)" name="location" value="{{old('location')}}">
                            <span class="fa fa-location-arrow form-control-feedback right" aria-hidden="true"></span>
                        </div>



                        <div class="form-group ">

                            <div class="col-md-9 col-sm-9 col-xs-12 input-group date"  >

                                <div class="form-group">
                                    <div class='input-group date' id='mpyDatepicker'>
                                        <input type='text' name="dob" id='myDatepickper' required="required" class="form-control" placeholder="Date of birth" value="{{old('dob')}}"/>
                                        <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>


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