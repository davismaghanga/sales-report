@extends('layouts.user.master')
@section('content')

    <div class="right_col" role="main">
        @if(Session::has('cart'))
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

                <div class="align-content-center">
                    <h4> <strong> Inclusive of tax and Courier charges if any </strong> </h4>

                </div>
                <strong id="total_price" class="text-capitalize">Final Price: Kshs. {{$finalPrice}}</strong>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <form action="{{url('goToCheckout/post')}}" method="post">
                    @csrf
                    <input type="hidden" name="percentageDiscount" value="{{$percentageDiscount}}">
                    <input type="hidden" name="courierIsChecked" value="{{$courierIsChecked}}">
                    <input type="hidden" name="finalPrice" value="{{$finalPrice}}">

                    <button type="submit" class="btn btn-primary">Checkout</button>
                    {{--<a href="" role="button" class="btn btn-primary">Checkout</a>--}}

                </form>

            </div>
        </div>
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
