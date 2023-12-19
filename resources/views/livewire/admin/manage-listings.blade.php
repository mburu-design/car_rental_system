<div>
    <div class="card row d-flex">
        <div class="col-12 h4 text-center ms-3 py-2">
            {{$listings->count()}} online listings
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
                <th scope="col"> listing ID</th>
                <th scope="col">Pickup date</th>
                <th scope="col">return date</th>
                <th scope="col">Location</th>
                <th scope="col">cost/day</th>
                <th scope="col">status</th>
                <th scope="col">listing date</th>
                <th scope="col" class="text-center">Action</th>


            </tr>
        </thead>
        <tbody>
            @if ($listings->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO Available listing</td>
            </tr>
            @else
            @foreach ($listings as $listing)
            <tr>
                <th scope="row"><a href="#">{{$listing->id}}</a></th>

                <th>{{$listing->pickup_date . " ".$listing->pickup_time}}</th>

                <td scope='row'> {{$listing->dropoff_date. " ".$listing->dropoff_time}}</td>
                <td>{{$listing->pickup_location}}</td>
                <td>{{$listing->total_cost}}</td>
                @if ($listing->status=='booked')
                <td class="h4 text-success">{{$listing->status}}</td>
                @endif
                @if ($listing->status=='available')
                <td class="h4 text-primary">{{$listing->status}}</td>
                @endif
                @if ($listing->status=='warning')
                <td class="h4 text-warning">{{$listing->status}}</td>
                @endif
                <td>{{$listing->updated_at}}</td>
                <td>
                    <ul class="d-flex">
                        <li><button class="btn"><i class="fa fa-edit text-primary"></i></button></li>
                        <li><button class="btn " wire:click='deleteListing({{$listing->id}})'><i
                                    class="fa fa-trash text-danger"></i></button></li>

                    </ul>
                </td>

            </tr>
            @endforeach
            @endif


        </tbody>
    </table>
</div>