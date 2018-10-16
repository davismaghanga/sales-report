@extends('layouts.user.master')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>User Profile</h3>
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
                            <h2>Sales Rep Details <small>Activity report</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="images/user/profile-pictures/{{$user->avatar}}" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                                <h3>{{Auth::user()->name}}</h3>

                                <ul class="list-unstyled user_data">
                                    <li><i class="fa fa-map-marker user-profile-icon"></i> {{$user->location}}
                                    </li>

                                    <li>
                                        <i class="fa fa-phone user-profile-icon"></i> {{$user->contacts}}
                                    </li>

                                    <li>
                                        <i class="fa fa-globe user-profile-icon"></i>
                                        <strong> Region: </strong>
                                        @if($user->region_id!=null)
                                            {{$user->region->region}}
                                        @else
                                            <i>Not Specified</i>
                                        @endif
                                    </li>

                                    <li class="m-top-xs">
                                        <i class="fa fa-external-link user-profile-icon"></i>
                                        <a href="http://storymojaafrica.co.ke" target="_blank">storymojaafrica.co.ke</a>
                                    </li>
                                </ul>

                                <a class="btn btn-success" href="{{url('/edit-profile/'.$user->id)}}"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                <br />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection