<div class="container d-flex justify-content-center align-items-center my-4" style="padding-top: 80px">

    <div class="card rounded">



        <div class="profile d-flex justify-content-center align-items-center">

            <img src="{{Storage::url($user->profile_image)}}" class=" img img-fluid rounded-circle py-2" width="80">

        </div>




        <div class="mt-5 text-center">

            <h4 class="mb-0">{{$user->firstName." ".$user->lastName}}</h4>
            <span class="text-muted d-block mb-2">Los Angles</span>

            <span><i class="fa fa-star text-warning"></i></span>


            <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                <div class="stats mx-2">
                    <h6 class="mb-0">Rides</h6>
                    <span class="my-2">{{$bookings}}</span>

                </div>


                <div class="stats mx-2">
                    <h6 class="mb-0">verified ratings</h6>
                    <span class="my-2">{{$ratings}}</span>

                </div>
                <div class="stats">
                    <h6 class="mb-0">Ranks</h6>
                    <span class="my-2">12</span>

                </div>
            </div>

            <div class="d-block px-4 mt-4">
                <div class="stats mx-2 d-flex">
                    <h6 class="mx-2 h4">Phone</h6>
                    <span class="mx-2">{{$user->telephone}}</span>
                </div>
            </div>
            <div class="d-block px-4 my-2">
                <div class="stats mx-2 d-flex">
                    <h6 class="mx-2 h4">Email</h6>
                    <span class="mx-2">{{$user->email}}</span>

                </div>
            </div>
            <div class="d-block px-4 my-2">
                <div class="stats mx-2 d-flex">
                    <h6 class="mx-2 h4">Age</h6>
                    @php
                    $dob = $user->DOB;
                    $dob = Carbon\Carbon::parse($dob);
                    $now = Carbon\Carbon::now();
                    $age = $now->diffInYears($dob);
                    @endphp
                    <span class="mx-2">{{$age}}</span>

                </div>

            </div>
            <div class="d-block px-4 my-2">
                <div class="stats mx-2 d-flex">
                    <h6 class="mx-2 h4">Member since</h6>
                    @php
                    $date = Carbon\Carbon::parse($user->created_at);
                    @endphp
                    <span class="mx-2">{{$date->format('d M Y')}}</span>

                </div>
            </div>

        </div>

    </div>

</div>