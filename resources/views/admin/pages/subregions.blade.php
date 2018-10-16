@extends('layouts.admin.master')

@section('content')

    <div class="right_col" role="main">

        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Subregions <small>These are mostly towns</small></h2>
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
                        <form class="form-horizontal form-label-left input_mask" action="{{url('admin/subregion/post')}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{old('id')}}">

                            <div class=" form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Enter Sub Region" name="subregion" value="{{old('subregion')}}">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                            </div>

                            <div class=" form-group has-feedback">

                                <select type="text" class="form-control" id="inputSuccess5" placeholder="Enter Sub Region" name="region_id" >
                                    @foreach($regions as $region)

                                        {{--we loop through all the regions for every region we create a selectable option--}}
                                        {{--we check for old input just incase you are editing with the same form -This marks the last used option as "selected"--}}
                                        {{--between the option tags we display the region name--}}
                                        <option value="{{$region->id}}" {{(old('region_id') == $region->id)?"selected":""}}>{{$region->region}}</option>
                                    @endforeach
                                </select>
                                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
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
