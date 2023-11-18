<div class="card">
    <div class="card-header text-start">
        <h6 class="fs-6">
            My requests
        </h6>
    </div>
    @foreach ($myRequest as $request)
    <div class="row">
        <div class="row m-2">
            <div class="col-4">
                <img src="{{Storage::url($request->fleet()->value('exterior_front_image'))}}" alt="car image"
                    class="img img-fluid rounded" style="width: 140px; height:100px">
            </div>
            <div class="col-6">
                <div class="row text-start">
                    <small>
                        {{$request->fleet()->value('make')}}
                        &nbsp;&nbsp;{{$request->fleet()->value('category')}}&nbsp;&nbsp;{{$request->fleet()->value('model')}}
                    </small>
                </div>
                <div class="row">
                    <small>

                        <div class="row my-2 text-start">
                            <div class="col-6">
                                <h6 class="fs-6">
                                    From
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6 class="fs-6">
                                    To
                                </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-6 text-start">
                                    {{$request->requestListing()->value('pickup_date')}} &nbsp;&nbsp;
                                    {{$request->requestListing()->value('pickup_time')}}
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="fs-6 text-start">
                                    {{$request->requestListing()->value('dropoff_date')}} &nbsp;&nbsp;
                                    {{$request->requestListing()->value('dropoff_time')}}

                                </p>
                            </div>
                        </div>
                        <div class="row">
                            @if ( $request->status=='approved')
                            <h6 class="fs-6 text-success text-start">
                                {{$request->status}}
                            </h6>
                            @endif
                            @if ( $request->status=='pending')
                            <h6 class="fs-6 text-warning text-start">
                                {{$request->status}}
                            </h6>
                            @endif
                            @if ( $request->status=='declined')
                            <h6 class="fs-6 text-danger text-start">
                                {{$request->status}}
                            </h6>
                            @endif

                        </div>
                    </small>
                </div>
            </div>
            <div class="col-2">
                <p class="pt-0 text-danger">
                    See details
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="col-6 text-start py-2">
                <button class="btn btn-danger">
                    cancel request
                </button>
            </div>
            <div class="col-6 text-end p-2">
                @if ( $request->status =='approved')
                <a href="{{route('request.checkout', ['request_id' => $request->id])}}" class="btn btn-success">proceed
                    to
                    booking</a>
                @else
                <button class="btn btn-success disabled">
                    proceed to booking
                </button>
                @endif


            </div>
        </div>
    </div>
    @endforeach
    <div class="card-footer">

    </div>
</div>