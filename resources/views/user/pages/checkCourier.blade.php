@extends('layouts.user.master')
@section('content')

    <div class="right_col" role="main">
        @if(Session::has('cart'))
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <strong id="total_price" class="text-capitalize"> Discounted Price: {{$price_after_disc}}</strong>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

                    <form action="{{url('courier/post')}}" method="post" >
                        @csrf
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                                <h4 class="card-title">Courier</h4>
                                <input type="hidden" name="discounted_price" value="{{$price_after_disc}}">
                                <input type="hidden" name="percentageDiscount" value="{{$percentageDiscount}}">

                                <label for="" >Courier charges:</label>
                                <input type="checkbox" name="courier" id="courier" >

                                <br>

                                <button type="submit" class="btn btn-primary btn-round">Next</button>

                                {{--<a href="#" role="button"class=" btn btn-primary">Next</a>--}}
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="clearfix"></div>


        <div class="clearfix"></div>
@else
            <div class="row">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <h1 ><bold> No items in cart</bold></h1>
                </div>
            </div>

            @endif

    </div>

@endsection

@section('scripts')

@stop
