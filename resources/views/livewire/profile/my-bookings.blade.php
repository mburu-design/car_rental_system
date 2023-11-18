<div class="card">
    <div class="card-header text-start">
        <h6 class="fs-6">
            My Bookings
        </h6>
    </div>
    @if ($myBookings->isEmpty())
    <div class="card-body text-center text-danger fs-4">
        You have no booking
    </div>
    @else
    @foreach ($myBookings as $booking)

    <div class="card-body">
        <div class="row m-2">
            <div class="col-4">
                <img src="{{Storage::url($booking->rideRequest->fleet->value('exterior_front_image'))}}"
                    id="profile-picture" alt="car image" class="img img-fluid rounded">
            </div>
            <div class="col-6">
                <div class="row text-start mb-2 text-primary">
                    <small class="d-flex">
                        booking id : <a href="#">{{$booking->id}}</a>
                    </small>
                </div>
                <div class="row text-start">
                    <small>
                        {{ $booking->rideRequest->fleet->make . " ".$booking->rideRequest->fleet->model}}
                    </small>
                </div>
                <div class="row">
                    <small>
                        <div class="row text-start my-2">
                            <small>
                                booking date
                            </small>
                        </div>
                        <div class="row my-2 text-start">
                            <div class="col-6">
                                <h6 class="fs-6">
                                    From
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6 class="fs-6">
                                    To
                                </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-start">
                                <p class="fs-6">
                                    {{ $booking->rideRequest->requestListing->pickup_date . "
                                    ".$booking->rideRequest->requestListing->pickup_time}}
                                </p>
                            </div>
                            <div class="col-6 text-start">
                                <p class="fs-6">
                                    {{ $booking->rideRequest->requestListing->dropoff_date . "
                                    ".$booking->rideRequest->requestListing->dropoff_time}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <h6 class="fs-6 text-success text-start">
                                booked
                            </h6>
                        </div>
                    </small>
                </div>
            </div>
            <div class="col-2">
                @php

                $ratingExists = \App\Models\CarRatings::where('rater_id', Auth::user()->id)->where('fleet_id',
                $booking->rideRequest->fleet_id)->exists();
                @endphp
                @if ($ratingExists)
                <button type="button" class="btn btn-success d-flex w-100 disabled" data-bs-toggle="modal"
                    data-bs-target="#ratingmodal">
                    Already rated this car
                </button>
                @else
                <button type="button" class="btn btn-primary d-flex w-100" data-bs-toggle="modal"
                    data-bs-target="#ratingmodal">
                    Rate car
                </button>
                @endif



            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ratingmodal" tabindex="-1" aria-labelledby="ratingmodal" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class=" align-content-center fs-6 h3 my-3">
                        Rate this car
                    </div>
                    <form>
                        <div class="mb-3">
                            <div class="mb-4">
                                <div class="mb-4">
                                    <span class="text-xl h3 text-success">Star Rate this:</span>
                                    @foreach (range(1, 5) as $star)
                                    <i wire:click="setRating({{ $star }})"
                                        class="cursor-pointer text-{{ $star <= $rating ? 'warning' : 'gray' }} fas fa-star"></i>
                                    @endforeach
                                </div>

                                <div>
                                    <span>Your rating: {{ $rating }}</span>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="carRating" class="form-label text-start">Review Comment</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="50"
                                minlength="" wire:model='reviewComment'></textarea>
                            @error('reviewComment') <span class="error">{{ $message }}</span> @enderror

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" wire:click='saveRatings({{$booking->id}})' class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>

    @endforeach
    @endif

</div>