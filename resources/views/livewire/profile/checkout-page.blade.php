<!--For Page-->
<div class="w-100 d-flex justify-content-center" style="padding-top: 80px">


    <!--For Row containing all card-->
    <div class="row container">

        <!--Card 1-->
        <div class="col-sm-8">
            <div class="card card-cascade wider shadow p-3 mb-5  ">

                <!--Card image-->
                <a href="#">
                    <div class="view view-cascade card-banner text-center">
                        <img class="img  rounded img-fluid  max-width:100% mx-auto height:auto"
                            src="{{Storage::url($requestCheckout->fleet->exterior_front_image)}}" alt="">

                </a>
            </div>


            <!--Product Description-->
            <div class="desc">

                <!-- 1st Row for title-->
                <div class="row subRow">

                    <!--Column for Data-->
                    <div class="col">
                        <p class="text-muted row1">Milage</p>
                        <p class="row2">565000km</p>
                    </div>

                    <!--Column for Data-->
                    <div class="col">
                        <p class="text-muted row1">Transmission</p>
                        <p class="row2">{{$requestCheckout->fleet->transmission_type}}</p>
                    </div>

                    <!--Column for Data-->
                    <div class="col">
                        <p class="text-muted row1">Make</p>
                        <p class="row2">{{$requestCheckout->fleet->make}} &nbsp; {{$requestCheckout->fleet->model}}
                        </p>
                    </div>

                </div>





                <!-- 2nd Row for title-->
                <div class="row subRow">

                    <!--Column for Data-->
                    <div class="col">
                        <p class="text-muted row1">Body</p>
                        <p class="row2">{{$requestCheckout->fleet->category}}</p>
                    </div>

                    <!--Column for Data-->
                    <div class="col">
                        <p class="text-muted row1">Year</p>
                        <p class="row2">{{$requestCheckout->fleet->year}}</p>
                    </div>

                    <!--Column for Data-->
                    <div class="col">
                        <p class="text-muted row1">Number plate</p>
                        <p class="row2">{{$requestCheckout->fleet->car_registration_number}}</p>
                    </div>

                </div>




            </div>
        </div>
    </div>



    <!--Card 2-->
    <div class="col-sm-4">
        <div class="card card-cascade card-ecommerce wider shadow p-2 mb-5 ">

            <!--Card Body-->
            <div class="card-body card-body-cascade">

                <!--Card Description-->
                <div class="card2decs">
                    <div class=" g-2 row d-flex justify-content-between">
                        <p class="heading1 text-start"><strong>Summary</strong></p>

                        <div class="col text-start">
                            <p class="quantity">number of days</p>
                        </div>
                        <div class="col text-end ">
                            3
                        </div>
                    </div>
                    <div class=" g-2 row d-flex justify-content-between">

                        <div class="col text-start">
                            <p class="quantity">Cost/day</p>
                        </div>
                        <div class="col text-end totalText1">
                            sh 700
                        </div>
                    </div>
                    <div class=" g-2 row d-flex justify-content-between">

                        <div class="col text-start">
                            <p class="total">Total</p>
                        </div>
                        <div class="col text-end totalText2">
                            sh 700
                        </div>
                    </div>
                </div>

                <div class="my-3">
                    <p class="heading2"><strong>Payment Details</strong></p>
                    <div class=" g-2 row d-flex justify-content-between">
                        <div class="col text-start">
                            <p class="total">Rider Name</p>
                        </div>
                        <div class="col text-end">
                            {{$requestCheckout->rider->user->firstName}} &nbsp;
                            {{$requestCheckout->rider->user->lastName}}
                        </div>
                    </div>
                    <div class=" g-2 row d-flex justify-content-between">
                        <div class="col text-start">
                            <p class="total">Payment method</p>
                        </div>
                        <div class="col text-end">
                            M-PESA
                        </div>
                    </div>
                    <div class=" g-2 row d-flex justify-content-between">
                        <div class="col text-start">
                            <p class="total">Payment Phone</p>
                        </div>
                        <div class="col text-end">
                            {{$requestCheckout->rider->payment_phone}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Card footer-->

        <button type="button" class="btn btn-primary w-100"
            wire:click="processPayment({{$requestCheckout->rider->id}}, {{$rideRequestId}})"
            onclick="confirm('You will be prompted to pay ksh {{$requestCheckout->requestListing->total_cost}}\n on this phone:{{$requestCheckout->rider->payment_phone}} to sucessfully book for this ride \n clicK OK to continue') || event.stopImmediatePropagation()">
            PAY TO BOOK
        </button>
    </div>
</div>
</div>


</div>
</div>