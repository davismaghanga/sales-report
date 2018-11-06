@extends('layouts.user.master')

{{--@section('scripts')--}}
    {{--<script>--}}
    {{----}}
    {{--function getNewPrice(discount){--}}
        {{--var url='{{url('getDiscount/NewPrice')}}';--}}
        {{--axios.post(url,{'discount':discount})--}}
    {{--}--}}
    {{--</script>--}}

{{--@endsection--}}

@section('content')

    <div class="right_col" role="main">
        @if(Session::has('cart'))

        <div class="">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group">
                        @foreach($products as $product)

                            <li class="list-group-item">

                                <span class="badge bg-green">{{$product['qty']}}</span>
                                <strong>{{$product['item']['title']}}</strong>
                                <span class="label label-success">{{$product['price']}}</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('reduceOne',$product['item']['id'])}}"> Reduce by 1</a></li>
                                        <li><a href="{{url('removeBook',$product['item']['id'])}}"> Remove this book</a></li>
                                    </ul>

                                </div>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>

        </div>


        <div class="clearfix"></div>
<div class="row">
        <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
            <strong> Total: {{$totalPrice}}</strong>


            {{--<div class="pull-right">--}}
                {{--<label> Discount:</label>--}}
                {{--<input type="number" name="discount" onchange="getNewPrice(this.value)">--}}
            {{--</div>--}}
            {{--<strong class="pull-right"> Discount: </strong>--}}



        </div>



</div>
        <div class="clearfix"></div>

<div class="row">
        <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
            <a href="{{url('checkoutpage')}}" role="button" class="btn btn-success">Checkout</a>
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

