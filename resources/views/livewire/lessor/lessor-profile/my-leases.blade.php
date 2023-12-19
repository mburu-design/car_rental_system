<div class="card">
    <table class="table">

        <thead>
            <tr>
                <th scope="col">booking ID</th>
                <th scope="col">car ID</th>
                <th scope="col">Rider id</th>
                <th scope="col">location</th>
                <th scope="col">From date</th>
                <th scope="col">To date</th>
                <th scope="col">Rating</th>



            </tr>
        </thead>
        <tbody>

            @if ($myLeases->isEmpty())
            <div class="text-center h3 text-danger">Oops ! you have not leased any car at the momment</div>
            @else
            <tr>

                @foreach ($myLeases as $lease)
                <th scope="row"><a href="#" class="link">{{$lease->id}}</a></th>
                <th scope="row"><a href="#" class="link">{{$lease->rideRequest->fleet_id}}</a></th>
                <th scope="row"><a href="#" class="link">{{$lease->rideRequest->rider->id}}</a></th>
                <td>{{$lease->rideRequest->requestListing->pickup_location}}</td>
                <td>{{$lease->rideRequest->requestListing->pickup_date . " ".
                    $lease->rideRequest->requestListing->pickup_time}}</td>
                <td>{{$lease->rideRequest->requestListing->dropoff_date ."
                    ".$lease->rideRequest->requestListing->dropoff_time}}</td>
                <th scope="row"><button type="button" class="btn btn-primary d-flex w-100" data-bs-toggle="modal"
                        data-bs-target="#ratingmodal">
                        Rate Driver
                    </button></th>
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
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            maxlength="50" minlength="" wire:model='reviewComment'></textarea>
                                        @error('reviewComment') <span class="error">{{ $message }}</span> @enderror

                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" wire:click='saveRatings({{$lease->rideRequest->rider->id}})'
                                    class="btn btn-primary">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tr>
            @endif



        </tbody>
    </table>
</div>