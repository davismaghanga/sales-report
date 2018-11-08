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

            <div class="">
                <div class="row">

                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                        <h1> Checkout</h1>
                        <h2> Inclusive of VAT and Courier charges if any</h2>
                        <h4> Your total fee to be paid is: Kshs.{{$total}}</h4>

                        <form action="{{url('checkoutpage')}}" method="post" class="form-horizontal form-label-left input_mask">

                            @csrf
                            <div class="row">

                                <div class="col-xs-12">
                                    <div class="form-group">

                                        <input type="hidden" name="finalCost" value="{{$total}}">
                                        <input type="hidden" name="percentageDiscount" value="{{$percentageDiscount}}">
                                        <input type="hidden" name="courierIsChecked" value="{{$courierIsChecked}}">
                                        <label for="institution_name"> Name</label>
                                        <input type="text" class="form-control col-md-10" name="institution_name" required placeholder="Name of Institution">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="institution_type">Type of Institution</label>
                                        <select class="form-control col-md-10" name="type" required>
                                            <option selected disabled>Select the type of Institution</option>
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
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="county"> County</label>
                                        <select name="county_id" id="county" onchange="getSubCounty(this.value)" class="form-control col-md-10" required>
                                            <option selected disabled> Select County</option>
                                            {{--foreach loop--}}
                                            @foreach($counties as $county)
                                                <option value="{{$county->id}}">{{$county->county}}</option>
                                            @endforeach

                                        </select>


                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="subCounty">SubCounty</label>
                                        <select name="subcounty_id" id="subcountie" class="form-control col-md-10"  required>


                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="contactPerson">Contact Person</label>
                                        <input type="text" name="contactName" required placeholder="Name of Contact Person" class="form-control col-md-10">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="contactPerson">Contact Number</label>
                                        <input type="text" name="contactNumber" required placeholder="Contact Number" data-inputmask="'mask' : '(999) 999-9999'"   class="form-control col-md-10">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="contactPerson">Contact Email</label>
                                        <input type="email" name="contactEmail" required placeholder="Contact Email"    class="form-control col-md-10">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-success btn-round">Submit</button>


                        </form>

                    </div>
                </div>

            </div>


            <div class="clearfix"></div>


    </div>

@endsection