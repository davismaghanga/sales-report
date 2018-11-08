@extends('layouts.user.master')
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
            <strong id="total_price"> Total: {{$totalPrice}}</strong>
        </div>
</div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

                <form action="{{url('discount/post')}}" method="post" >
                    @csrf
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h4 class="card-title">Discount</h4>
                            <input type="hidden" name="totalPrice" value="{{$totalPrice}}">
                            <input type="number" name="discount" class="form-control">
                            <br>

                            <button type="submit" class="btn btn-primary btn-round">Next</button>

                            {{--<a href="#" role="button"class=" btn btn-primary">Next</a>--}}
                        </div>
                    </div>

                </form>
            </div>
        </div>
            <div class="clearfix"></div>


{{--<div class="row">--}}
        {{--<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">--}}
            {{--<a href="{{url('checkoutpage')}}" role="button" class="btn btn-success">Checkout</a>--}}
        {{--</div>--}}
{{--</div>--}}


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
