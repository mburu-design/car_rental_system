<div>
    <div class="card row d-flex">
        <div class="col-12 h4 text-center ms-3 py-2">
            {{$riders->count()}} registered drivers
        </div>
        <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="Search Drivers" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">search</button>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"> ID</th>
                <th scope="col">Name</th>
                <th scope="col">Tel</th>
                <th scope="col">Email</th>
                <th scope="col"> ID NO</th>
                <th scope="col"> DL NO</th>

                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($riders->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO REGISTERED USERS</td>
            </tr>
            @else
            @foreach ($riders as $rider)
            <tr>
                <th scope="row"><a href="#">{{$rider->id}}</a></th>
                <td>{{$rider->user()->value('firstName')." ".$rider->user()->value('lastName')}}</td>
                <td><a href="{{$rider->payment_phone}}">{{$rider->payment_phone}}</a></td>
                <td><a href="{{$rider->user()->value('email')}}">{{$rider->user()->value('email')}}</a></td>
                <td>{{$rider->ID_number}} </td>
                <td>{{$rider->driver_license_number}} </td>

                <td>
                    <ul class="d-flex">
                        <li><button class="btn"><i class="fa fa-ban text-primary"
                                    wire:click='banRider({{$rider->id}})'></i></button></li>
                        <li><button class="btn"><i class="fa fa-trash text-danger"
                                    wire:click='deleteRider({{$rider->id}})'></i></button></li>

                    </ul>
                </td>

            </tr>
            @endforeach
            @endif


        </tbody>
    </table>
</div>