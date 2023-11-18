<div class="accordion" id="accordionPanelsStayOpenExample">
    @if ( count($pendingRequests) ===0 )
    <div class="card-header text-center ">
        <div class="h3 text-warning">No pending request for now</div>
    </div>

    @else
    @foreach ($pendingRequests as $rideRequest)
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThree">
                <p>
                <ul class="d-flex nustify-content-between">
                    <li class="text-start">
                        <img src="{{Storage::url($rideRequest->rider->user->profile_image)}}" alt=""
                            class="img img-fluid profilePhoto" style="height: 50px;width:50px">
                    </li>
                    <li class="mx-2 text-center">
                        <ul class="d-block text-start">
                            <li>
                                <a href="">{{$rideRequest->rider->user->firstName}}
                                    &nbsp;&nbsp;{{$rideRequest->rider->user->lastName}}</a>
                            </li>
                            <li class="fs-6">
                                <p>
                                    Requested for Ride {{$rideRequest->fleet->car_registration_number}}
                                </p>
                            </li>

                        </ul>
                    </li>
                    <li class="ms-3 d-flex ">
                        <ul class="d-flex">
                            <li class="mx-2">
                                <a href="#" class="btn btn-sm btn-primary"
                                    wire:click='approveRequest({{ $rideRequest->id}})'>approve</a>
                            </li>
                            <li class="mx-2">
                                <a href="#" class="btn btn-sm btn-danger"
                                    wire:click='rejectRequest({{ $rideRequest->id}})'>Reject</a>

                            </li>
                        </ul>
                    </li>
                </ul>
                </p>
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
                <p class="d-flex">
                    Rider &nbsp;<a href="#">{{$rideRequest->rider->user->id}}</a>&nbsp; is Requesting for car
                    registration number&nbsp; <a href="#"> {{$rideRequest->fleet->car_registration_number}}</a>
                </p>
                <p class=" d-flex text-start">from date
                    &nbsp;&nbsp;<strong>{{$rideRequest->requestListing->pickup_date}}
                        &nbsp;&nbsp;{{$rideRequest->requestListing->pickup_time}}</strong> &nbsp;&nbsp;
                    To date &nbsp;&nbsp; <strong>{{$rideRequest->requestListing->dropoff_date}}
                        &nbsp;&nbsp;>{{$rideRequest->requestListing->dropoff_time}}</strong>
                </p>

            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>