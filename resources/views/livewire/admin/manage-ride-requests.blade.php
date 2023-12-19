<div>
    <div class="card row d-flex">
        <div class="col-12 h4 text-center ms-3 py-2">
            {{$rideRequests->count()}} requested rides
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
                <th scope="col"> request ID</th>
                <th scope="col">listing Id</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">request date</th>
                <th scope="col">processing status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($rideRequests->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO Fleets</td>
            </tr>
            @else
            @foreach ($rideRequests as $request)
            <tr>
                <th scope="row"><a href="#">{{$request->id}}</a></th>
                <td><a href="#"> {{$request->listing_id}}</a></td>
                <td>{{$request->requestListing()->value('pickup_date')}}</td>
                <td>{{$request->requestListing()->value('dropoff_date')}}</td>
                <td>{{$request->updated_at}}</td>
                @if ($request->status=="approved")
                <td class="text-success">{{$request->status}}</td>
                @endif
                @if ($request->status=="declined")
                <td class="text-danger">{{$request->status}}</td>
                @endif
                @if ($request->status=="pending")
                <td class="text-warning">{{$request->status}}</td>
                @endif
                <td>
                    <ul class="d-flex">
                        <li><button class="btn"><i class="fa fa-edit"></i></button></li>
                        <li><button class="btn " wire:click='deleteRequest({{$request->id}})'><i
                                    class="fa fa-trash text-danger"></i></button></li>

                    </ul>
                </td>

            </tr>
            @endforeach
            @endif


        </tbody>
    </table>
</div>