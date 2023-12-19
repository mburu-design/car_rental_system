<div>
    <div class="card row d-flex">
        <div class="col-12 h4 text-center ms-3 py-2">
            {{$bookings->count()}} total bookings
        </div>
        <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="Search Car" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">search</button>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">booking ID</th>
                <th scope="col">Listing Id</th>
                <th scope="col">Payment ID</th>
                <th scope="col">Car Id</th>
                <th scope="col">From Date</th>
                <th scope="col">To Date</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Action</th>


            </tr>
        </thead>
        <tbody>
            @if ($bookings->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO Fleets</td>
            </tr>
            @else
            @foreach ($bookings as $booking)
            <tr>
                <th scope="row"><a href="#">{{$booking->id}}</a></th>
                <td>{{$booking->rideRequest->requestListing()->value('id')}}</td>

                <td>{{$booking->payments_id}}</td>
                <td>{{$booking->rideRequest->fleet->id}}</td>
                <td>{{$booking->rideRequest->requestListing->pickup_date}}</td>
                <td>{{$booking->rideRequest->requestListing->dropoff_date}}</td>
                <td class="text-success">approved</td>

                <td>
                    <ul class="d-flex">
                        <li><button class="btn"><i class="fa fa-edit"></i></button></li>
                        <li><button class="btn "><i class="fa fa-trash text-danger"></i></button></li>

                    </ul>
                </td>

            </tr>
            @endforeach
            @endif


        </tbody>
    </table>
</div>