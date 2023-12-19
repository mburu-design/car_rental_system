<div>
    <div class="card row d-flex">
        <div class="col-12 h4 text-center ms-3 py-2">
            {{$lessors->count()}} registered Lessors
        </div>
        <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="Search Car owners" aria-label="Recipient's username"
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

                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($lessors->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO REGISTERED LESSORS</td>
            </tr>
            @else
            @foreach ($lessors as $lessor)
            <tr>
                <th scope="row"><a href="#">{{$lessor->id}}</a></th>
                <td>{{$lessor->user()->value('firstName')." ".$lessor->user()->value('lastName')}}</td>
                <td><a href="{{$lessor->payment_phone}}">{{$lessor->payment_phone}}</a></td>
                <td><a href="{{$lessor->user()->value('email')}}">{{$lessor->user()->value('email')}}</a></td>
                <td>{{$lessor->ID_number}} </td>

                <td>
                    <ul class="d-flex">
                        <li><button class="btn "><i class="fa fa-ban text-danger"></i></button></li>
                        <li><button class="btn "><i class="fa fa-trash text-danger"
                                    wire:click='deleteLessor({{$lessor->id}})'></i></button></li>


                    </ul>
                </td>

            </tr>
            @endforeach
            @endif


        </tbody>
    </table>
</div>