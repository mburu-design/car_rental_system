<div class="container py-3" style="margin-top: 80px">
    <div class="row my-3 w-100   d-flex justify-content-center">
        @if (session('requestSuccess'))
        <div class="alert alert-success text-center">
            {{ session('requestSuccess') }}
        </div>
        @endif
        @if (session('requestFailed'))
        <div class="alert alert-danger">
            {{ session('requestFailed') }}
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <div class="align-items-center  d-flex p-2 justify-content-center">
        <div class="w-75 row card">
            <div class="card-header d-flex justify-content-between">
                <p class="h3 text-start"> requested car details</p>
                <p class="h3 text-end"><a href="">Cancel request</a></p>

            </div>
            <div class="card-body p-2">
                <div class="row g-3 px-2">
                    <div class="col d-block  align-items-start">
                        <label for="carRegistration" class="fs-6"><u>Number plate</u> </label>
                        <p class="fs-6">{{$car->fleet()->value('car_registration_number')}}</p>
                    </div>
                    <div class="col d-block  align-items-start">
                        <label for="carRegistration" class="fs-6"><u>Insurance provider</u></label>
                        <p class="fs-6">{{$car->fleet()->value('insurance_provider')}}</p>
                    </div>
                    <div class="col d-block  align-items-start">
                        <label for="carRegistration" class="fs-6"> <u>Policy Number</u></label>
                        <p class="fs-6">{{$car->fleet()->value('insurace_policy_number')}}</p>

                    </div>
                </div>
                <hr class="row-divider my-2">
                <div class="row my-2">
                    <ul class="d-flex">
                        <li>
                            {{$car->fleet()->value('category')}}
                        </li>
                        <li class="mx-3">{{$car->fleet()->value('make')}} &nbsp; &nbsp;
                            {{$car->fleet()->value('model')}}</li>
                    </ul>
                </div>
                <div class="row g-3">
                    <div class="col-3 d-block text-align-start">

                        <ul class=" d-flex">
                            <li>
                                <i class="fa fa-user"> </i>
                            </li>
                            <li class="mx-3">
                                {{$car->fleet()->value('number_of_seats')}} seats
                            </li>
                        </ul>
                        <ul class=" d-flex">
                            <li>
                                <i class="fa fa-tachometer"> </i>
                            </li>
                            <li class="mx-3">
                                {{$car->value('total_cost')}} / day
                            </li>
                        </ul>
                        <ul class=" d-flex">
                            <li>
                                <i class="fa fa-gas-pump"> </i>
                            </li>
                            <li class="mx-3">
                                {{$car->fleet()->value('fuel_type')}}
                            </li>
                        </ul>

                    </div>
                    <div class="col-3 d-block">
                        <ul class=" d-flex">
                            <li>
                                <i class="fas fa-snowplow"> </i>
                            </li>
                            <li class="mx-3">
                                {{$car->fleet()->value('number_of_doors')}} doors
                            </li>
                        </ul>
                        <ul class="d-flex">
                            <li>
                                <i class="fa fa-calendar"> </i>
                            </li>
                            <li class="mx-3">
                                {{$car->fleet()->value('year')}}
                            </li>
                        </ul>
                        <ul class="d-flex">
                            <li>
                                <i class="fa fa-gear"> </i>
                            </li>
                            <li class="mx-3">
                                {{$car->fleet()->value('transmission_type')}}
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">

                        <img src="{{Storage::url($car->fleet()->value('exterior_front_image'))}}" alt=""
                            class="img-fluid" style="width: 200px; height:100px">
                    </div>
                    <hr class="row-divider my-2">

                </div>
                <div class="row  p-2">
                    <p class="m-start-2 h3">car rental location</p>
                    <p>
                    <ul class="d-flex text start">
                        <li>
                            Pick-up & Drop-off
                        </li>
                        <li class="mx-2">
                            {{$car->value('pickup_date')}} &nbsp;&nbsp; {{$car->value('pickup_time')}}
                        </li>
                        <li class="mx-2">
                            -- {{$car->value('dropoff_date')}} &nbsp;&nbsp; {{$car->value('dropoff_time')}}
                        </li>
                    </ul>
                    </p>
                    <p class="">
                    <ul class="d-flex">
                        <li class="text-start">
                            <i class="fa fa-location"></i>
                        </li>
                        <li class="text-start">
                            {{$car->value('pickup_location')}}
                        </li>
                    </ul>
                    </p>

                </div>
            </div>
            <div class="card-footer text-align-center">
                <a href="/" class="text-center">View more cars</a>
            </div>
        </div>
    </div>
</div>