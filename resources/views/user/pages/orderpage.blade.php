@extends('layouts.user.master')

@section('scripts')

    <!-- Datatables -->
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <script>
        // $(function () {
        //     $('#datatable').DataTable();
        // })
        $(document).ready(function () {
            $('#datatable').DataTable();
        })

    </script>
@endsection


@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="row">
                <div class="col-md-6">
                    <div class="title_left">
                        <h1> <i class="fa fa-book"></i> Stroymoja Books</h1>
                    </div>
                </div>

            </div>
        </div>



        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
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
                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="column-title">Title</th>
                                <th class="column-title">Intended age </th>
                                <th class="column-title">Book type </th>
                                <th class="column-title">Retail price exclusive vat </th>
                                <th class="column-title">Add 1 to cart </th>
                                <th class="column-title">Add 10 to cart </th>
                                <th class="column-title">Add 100 to cart </th>
                                {{--<th class="column-title">Add 50 to cart </th>--}}

                            </tr>
                            </thead>


                            <tbody>
                            @foreach($books as $book)
                                <tr class="even pointer">
                                    <td class=""> {{$book->title}}</td>
                                    <td class=""> {{$book->intended_age}}</td>
                                    <td class=""> {{$book->book_type}}</td>
                                    <td class=""> {{$book->price_excl_vat}}</td>
                                    <td class=""><a href="{{url('add-to-cart/'.$book->id)}}" role="button" class="btn btn-success"> Add </a></td>
                                    <td class=""><a href="{{url('add-ten/'.$book->id)}}" role="button" class="btn btn-success"> Add </a></td>
                                    <td class=""><a href="{{url('add-hundred/'.$book->id)}}" role="button" class="btn btn-success"> Add </a></td>
                                    {{--<td class=""><a href="" role="button" class="btn btn-success"> Add 10</a></td>--}}
                                    {{--<td class=""><a href="" role="button" class="btn btn-success"> Add 50</a></td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection

