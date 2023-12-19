<div class="container text-center" style="padding-top: 100px">

    @if (session('ResultCode') !== null)
    <div class="card">
        <div class="row justify-content-center text-align-center h3 text-success mb-2 alert alert-success">
            successfully booked
        </div>
        <div class="card-body">

            <div class="row my-2">
                <div class="col-4">
                    <img src="https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="" class="img img-fluid rounded">
                </div>
                <div class="col-6 mx-2 ">
                    <div class="row">
                        <div class="col-4">
                            <div class="strong h3 text-primary text-start">Booking Id</div>
                        </div>
                        <div class="col-6 text-start">
                            <p class="h4">{{$bookingId}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="strong h3 text-primary text-start">Listing Id</div>
                        </div>
                        <div class="col-6 text-start">
                            <p class="h4">{{$bookingId->rideRequest->requestListing->id}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="strong h3 text-primary text-start">Car location</div>
                        </div>
                        <div class="col-6 text-start">
                            <p class="h4">{{$bookingId->rideRequest->requestListing->pickup_location}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="strong h3 text-primary text-start">Pickup date</div>
                        </div>
                        <div class="col-6 text-start">
                            <p class="h4">{{$bookingId->rideRequest->requestListing->pickup_date}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="strong h3 text-primary text-start">Return date</div>
                        </div>
                        <div class="col-6 text-start">
                            <p class="h4">{{$bookingId->rideRequest->requestListing->dropoff_date}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="strong h3 text-primary text-start">Amount</div>
                        </div>
                        <div class="col-6 text-start">
                            <p class="h4">ksh {{$bookingId->rideRequest->requestListing->total_cost}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Display the value of ResultCode --}}
    <p>ResultCode: {{ session('ResultCode') }}</p>
    @endif

    <div class="row text-center h4">
        <a href="/" class="nav-link"><small>continue browsing</small></a>
    </div>


</div>