<div class="card">
    <div class="card-header">All Payments</div>
    <div class="card-body">
        <table class="table table-hover table-stripped">
            <thead>
                <tr>
                    <th scope="col">payment id</th>
                    <th scope="col">Requested ride id</th>
                    <th scope="col">Payment method</th>
                    <th scope="col">TX code</th>
                    <th scope="col">amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>

                </tr>
            </thead>
            <tbody>
                @if ($mypayment->isEmpty())
                <tr>
                    <td colspan="4" class="text-center text-danger h3">No payments made</td>
                </tr>
                @else
                @foreach ($mypayment as $payment)

                <tr>
                    <th scope="row"><a href="#">{{$payment->id}}</a></th>
                    <td><a href="#">{{$payment->rideRequest->id}}</a></td>
                    <td class="text-success h6">{{$payment->payment_method}}</td>

                    <td><a>{{$payment->transaction_code}}</a></td>
                    <td>ksh {{$payment->amount}}</td>
                    <td class="text-primary">{{$payment->status}}</td>
                    <td>{{$payment->updated_at}}</td>

                </tr>

                @endforeach
                @endif


            </tbody>
        </table>
    </div>
</div>