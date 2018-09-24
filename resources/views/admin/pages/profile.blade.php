@extends('layouts.admin.master')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Admin Profile</h3>
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
                            <h2>Administrator Details <small>Activity report</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="{{asset('images/admin/profile-pictures/'.$user->avatar)}}" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                                <label for="name">
                                    Name:
                                </label>

                                <h2>{{Auth::user()->name}}</h2>
                                <label for="position">
                                    Position:
                                </label>
                                <h3>System Administator</h3>



                                <a class="btn btn-success" href="{{url('/admin/edit-profile')}}"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                <br />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection