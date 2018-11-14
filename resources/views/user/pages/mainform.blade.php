@extends('layouts.user.master')

@section('scripts')
    <script>

        function getSubCounty(id) {
            var url='{{url('mainform/view/sub_counties_json')}}';
            axios.post(url,{'county_id':id})
                .then(function (response) {
                    $('#subcountie').empty();
                    $('#subcountie').append('<option disabled selected>Please select a sub county</option>');

                    $.each(response.data.sub_counties,function (key, value) {
                        $('#subcountie').append("<option value='"+value.id+"'>"+value.subcounty+"</option>");

                    });
                    // console.log(response.data.sub_counties);
                })
        }
    </script>
@endsection

@section('content')

<div class="right_col" role="main">
    <div class="col-md-12 col-xs-12">

            <div class="x_panel">
            <div class="x_title">
                <h2 style="text-decoration-color: deeppink !important;">Sales Report <small>Kindly fill this form carefully!</small></h2>
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
                <br />
                <form class="form-horizontal form-label-left input_mask" action="{{url('mainform/post')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <input type="hidden" value="{{old('id')}}" name="id">


                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label style="color: deeppink"  class="control-label">Institution Name</label>

                        <input type="text"  required="required"  class="form-control has-feedback-left" id="inputSuccess2" placeholder="Institution Name" name="institution_name" value="{{old('institution_name')}}">
                        <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label style="color: deeppink"   class="control-label">Institution type</label>
                            <select class="form-control" name="type" required>
                                <option selected disabled>Select type of institution</option>
                                <option value="Private Primary">Private Primary</option>
                                <option value="Private Secondary">Private Secondary</option>
                                <option value="Public Primary">Public Primary</option>
                                <option value="Public Secondary">Public Secondary</option>
                                <option value="NGO">NGO</option>
                                <option value="County Office">County Office </option>
                                <option value="Bookshop">Bookshop</option>
                                <option value="ECD/KG/Nursery">ECD/KG/Nursery</option>
                            </select>

                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <textarea class="form-control" rows="3" placeholder="What activity took place?"  required= "required"   value="{{old('activity')}}"    name="activity"></textarea>


                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <textarea class="form-control" rows="3" placeholder="Any upcoming events?" name="upcoming"  required="required"   value="{{old('upcoming')}}" ></textarea>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <textarea class="form-control" rows="3" placeholder="Outcome/Follow up needed" name="outcome" required="required"   value="{{old('outcome')}}" ></textarea>
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12"> County</label>

                        <select  required="required"  name="county_id" id="county" onchange="getSubCounty(this.value)">
                            <option selected disabled> Please select a county</option>
                            @foreach($counties as $county)
                            <option value="{{$county->id}}">{{$county->county}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">Sub  County</label>

                        <select   required="required"  name="subcounty_id" id="subcountie">

                        </select>
                    </div>


                    <div class="form-group">
                        <label  style="color: deeppink"  class="control-label col-md-3 col-sm-3 col-xs-12">Orders Received (Kshs):</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" name="orders" class="form-control" placeholder="Total Value of Orders (IF ANY )" value="{{old('orders')}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12"> Booklist(s) :</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="file-field">
                                <a class="btn-floating peach-gradient mt-0 float-left">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                    <input type="file" multiple name="booklist[]"  value="{{old('booklist[]')}}">
                                </a>

                                {{--@if(isset($errors))--}}
                                @if(count($errors->all()))

                                    <div class="alert alert-danger">

                                        @foreach($errors->all() as $error)

                                            <ul>
                                                <li> {{$error}}</li>
                                            </ul>
                                        @endforeach
                                    </div>


                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12"> KYC <small>Know your customer</small> :</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="file-field">
                                <a class="btn-floating peach-gradient mt-0 float-left">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                    <input type="file"  name="kyc"  value="{{old('kyc')}}">
                                    {{--<input type="file" accept="image/*" name="kyc"   capture="camera">--}}
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12"> Report <small>Upload sales rep report</small> :</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="file-field">
                                <a class="btn-floating peach-gradient mt-0 float-left">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                    <input type="file"  name="report"  value="{{old('report')}}">
                                </a>

                            </div>
                        </div>
                    </div>





                    <div class="row">
    <div class="x_content">
        <div class="form-group">
            <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">Contact Person's Name:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="contactName"  required="required" id="autocomplete-custom-append"  class="form-control col-md-10"  placeholder="Enter Contact's name"  value="{{old('contactName')}}"/>
            </div>
        </div>
        <div class="form-group">
            <label style="color:deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">Designation:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="contactDesignation"  required="required" id="autocomplete-custom-append" class="form-control col-md-10" placeholder="Position of institution representative" value="{{old('contactDesignation')}}"/>
            </div>
        </div>

        <div class="form-group">
            <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="contactNumber" required="required" class="form-control col-md-10" placeholder="Phone Number" data-inputmask="'mask' : '(999) 999-9999'" value="{{old('contactNumber')}}"/>
            </div>
        </div>
        <div class="form-group">
            <label style="color: deeppink" class="control-label col-md-3 col-sm-3 col-xs-12">Email:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="email" name="contactEmail"   id="autocomplete-custom-append" class="form-control col-md-10" placeholder="Email" value="{{old('contactEmail')}}"/>
            </div>
        </div>

    </div>

</div>

                    <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button style="color: deeppink"  type="submit" class="btn btn-round btn-warning ">Submit</button>
                            </div>
                        </div>

                </form>
            </div>
        </div>

    </div>
    <br />
</div>




@endsection
