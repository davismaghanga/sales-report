@extends('layouts.admin.master')

@section('content')

    <div class="right_col" role="main">

        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6" >
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add book to inventory </h2>
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
                    </div>


                    <div class="x_content ">
                        <br />
                        <form class="form-horizontal form-label-left input_mask " method="post" action="{{url('admin/addbook')}}">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control"  placeholder="Enter the title of the book" name="title" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">The intended age</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control"  placeholder="Enter the intended age" name="intended_age" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">Book Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control"  placeholder="Enter the type of book" name="book_type" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">Price (exc tax)</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="number" class="form-control"  placeholder="Enter the price of book" name="price_excl_vat" required>
                                </div>

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