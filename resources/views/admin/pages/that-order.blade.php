@extends('layouts.admin.master')

@section('content')

    <div class="right_col" role="main">
         <div class="">
             <div class="row">
                 <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                     <div class="panel panel-default">
                         <div class="panel-heading">
                             <label>Order for:</label>
                             {{$order->institution_name}}
                         </div>
                         <div class="panel-body">
                             <label>Contact Person:</label>
                             {{$order->contactName}}
                             <br>
                             <label>Phone Number:</label>
                             {{$order->contactNumber}}
                             <br>
                             <label>Email Address:</label>
                             @if($order->contactEmail==null)
                                 Not applicable
                             @else
                             {{$order->contactEmail}}
                             @endif
                             <br>

                             <label>Discount offered:</label>

                             @if($order->pdiscount!=null)
                             {{$order->pdiscount}}%
                             @else
                                 No discount offered
                             @endif
                             <br>

                             <label>Courier charges</label>

                             @if($order->courierIsChecked==true)
                                 Courier charges applied

                             @else
                                 No courier charges applied
                             @endif
                             <br>


                             <label>Sales rep involved:</label>
                             {{$order->user->name}}
                         </div>
                     </div>
                 </div>
             </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                        @foreach($products as $product)
                        <ul class="list-group">

                                <li class="list-group-item">

                                    <span class="badge bg-green">{{$product['qty']}}</span>
                                    <strong>{{$product['item']['title']}}</strong>
                                    <span class="label label-success">{{$product['price']}}</span>

                                </li>


                        </ul>
                            @endforeach

                    </div>

                    {{$products->links()}}
                </div>

            </div>


            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <strong> Total (V.A.T inclusive): {{$totalPrice}}</strong>

                </div>
            </div>
    </div>

@endsection

