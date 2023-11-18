<table class="table">
    <thead>
        <tr>
            <th scope="col">listing ID</th>

            <th scope="col">car ID</th>

            <th scope="col">location</th>
            <th scope="col">From date</th>
            <th scope="col">To date</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @if (!$myListing->isEmpty())
        @foreach ($myListing as $listing)
        <tr>
            <th scope="row"><a href="#" class="link">{{$listing->id}}</a></th>
            <th scope="row"><a href="#" class="link"> {{$listing->fleet_id}} </a></th>
            <td> {{$listing->pickup_location}} </td>
            <td>{{$listing->pickup_date ." ".$listing->pickup_time }}</td>
            <td>{{$listing->dropoff_date." ".$listing->dropoff_time}}</td>

            <td>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-danger">unlist</button>
                </div>
            </td>
            {{-- <td><button class="btn btn-danger">Delete</td> --}}
        </tr>
        @endforeach
        @else
        <tr class=" text-center text-danger fs-4 ">
            <td colspan="6">
                you have no listing
            </td>
        </tr>
        @endif

    </tbody>
</table>