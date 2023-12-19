<div>
    <div class=" row ">
        <div class="col-12 text-start h4">
            Dashboard
        </div>
    </div>
    <div class="card-group row ">
        <div class="card mx-2 col-lg-4 col-md-6 col-sm-12 border-none rounded">
            <div class="card-body">
                <h5 class="card-title h4">Total Car Owners</h5>
                <p class="card-text">
                <h1>{{$carOwners}}</h1>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mx-2 col-lg-4 col-md-6 col-sm-12">
            <div class="card-body">
                <h5 class="card-title h4">Registered Drivers</h5>
                <p class="card-text">
                <h1>{{$drivers}}</h1>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card  col-lg-4 col-md-6 col-sm-12">
            <div class="card-body ">
                <h5 class="card-title h4">Total Registered Users</h5>
                <p class="card-text">
                <h5>{{$users}}</h5>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-group row my-3">
        <div class="card mx-2 col-lg-4 col-md-6 col-sm-12 border-none rounded">
            <div class="card-body">
                <h5 class="card-title h4">Total fleets</h5>
                <p class="card-text">
                <h1>{{$fleets}}</h1>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mx-2 col-lg-4 col-md-6 col-sm-12">
            <div class="card-body">
                <h5 class="card-title h4">Total ride requests</h5>
                <p class="card-text">
                <h1>{{$rideRequests}}</h1>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card  col-lg-4 col-md-6 col-sm-12">
            <div class="card-body ">
                <h5 class="card-title h4">Total Bookings</h5>
                <p class="card-text">
                <h5>{{$totalBookings}}</h5>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-group row my-3">
        <div class="card mx-2 col-lg-4 col-md-6 col-sm-12 border-none rounded">
            <div class="card-body">
                <h5 class="card-title h4">Total listings</h5>
                <p class="card-text">
                <h1>{{$totalListings}}</h1>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>