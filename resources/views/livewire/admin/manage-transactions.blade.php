<div>
    <div class="card row d-flex">
        <div class="col-12 h4 text-center ms-3 py-2">
            {{$transactions->count()}} total transactions
        </div>
        <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="Search tranaction" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">search</button>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">payment ID</th>
                <th scope="col">gateway</th>

                <th scope="col">client Id</th>
                <th scope="col">Booking Id</th>
                <th scope="col">amount</th>
                <th scope="col">Code</th>
                <th scope="col">status</th>
                <th scope="col">Date</th>
                <th scope="col" class="text-center">Action</th>


            </tr>
        </thead>
        <tbody>
            @if ($transactions->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO Fleets</td>
            </tr>
            @else
            @foreach ($transactions as $tx)
            <tr>
                <th scope="row"><a href="#">{{$tx->id}}</a></th>
                <th>{{$tx->payment_method}}</th>
                <td><a href="#">{{$tx->riders_id}}</a></td>
                <td><a href="">{{DB::table('bookings')->where('payments_id','=',$tx->id)->value('id')}}</a></td>
                <td>{{$tx->amount}}</td>
                <td>{{$tx->transaction_code}}</td>
                <td class="text-success">{{$tx->status}}</td>
                <td>{{$tx->created_at}}</td>
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