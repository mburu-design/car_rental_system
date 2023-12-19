<div class="">
    <div class="row">
        <div class="col-6">
            <div class="card m-2">
                <div class="card-header">
                    <h6 class="fs-6">
                        Bio data
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <h6 class="fs-6">
                                Name
                            </h6>
                        </div>
                        <div class="col-9">
                            <p>
                                {{Auth::user()->firstName . " ".Auth::user()->lastName }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h6 class="fs-6">
                                DOB
                            </h6>
                        </div>
                        <div class="col-9">
                            <p>

                                {{Auth::user()->DOB}}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-2">
                <div class="card-header">
                    <h6 class="fs-6">
                        Contact Details
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <h6 class="fs-6">
                                PHONE
                            </h6>
                        </div>
                        <div class="col-9">
                            <p class="fs-6">
                                <a href="tel: {{Auth::user()->telephone}}"> {{Auth::user()->telephone}}</a>

                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h6 class="fs-6">
                                Email
                            </h6>
                        </div>
                        <div class="col-9">
                            <p class="fs-6">
                                <a href="mailto: {{Auth::user()->email}}"> {{Auth::user()->email}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-6">
            <div class="card m-2">
                <div class="card-header">
                    <h6 class="fs-6">
                        Driver Details
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <h6 class="fs-6">
                                ID number
                            </h6>
                        </div>
                        <div class="col-8">
                            <p>
                                @if ($rider !== null)
                                {{$rider->ID_number}}

                                @else
                                null
                                @endif

                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h6 class="fs-6">
                                DL number
                            </h6>
                        </div>
                        <div class="col-8">
                            <p>
                                @if ($rider !== null)
                                {{$rider->driver_license_number}}

                                @else
                                null
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-2">
                <div class="card-header">
                    <h6 class="fs-6">
                        Payment information
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fs-6">
                                Payment mode
                            </h6>
                        </div>
                        <div class="col-6">
                            <p>
                                MPESA
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fs-6">
                                Payment number
                            </h6>
                        </div>
                        <div class="col-6">
                            <p>
                                @if ($rider !== null)
                                {{$rider->payment_phone}}

                                @else
                                null
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>