<div class="container row car-details">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="col-7 mr-3">
        <div class="row car-specs p-3">
            <h3 class="fs-3">{{$listedCar->fleet()->value('category')}}</h3>
            <h6>{{$listedCar->fleet()->value('make')}} &nbsp; {{$listedCar->fleet()->value('model')}}</h6>
            <div class="row my-3">
                <div class="col-3">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-10 d-flex">
                            <p>{{$listedCar->fleet()->value('number_of_seats')}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-gears"></i>
                        </div>
                        <div class="col-10">
                            <p>{{$listedCar->fleet()->value('transmission_type')}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="col-10">
                            <p>2500 cc</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-gas-pump"></i>
                        </div>
                        <div class="col-8">
                            <p>{{$listedCar->fleet()->value('fuel_type')}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-gauge"></i>
                        </div>
                        <div class="col-8">
                            <p>30000 km</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="col-8">
                            <p>{{$listedCar->fleet()->value('year')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <figure class="card-banner">
                        <img src="{{Storage::url($listedCar->fleet()->value('exterior_front_image'))}}"
                            alt="Volkswagen T-Cross 2020" loading="lazy" class=" img img-fluid rounded w-100">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row my-4 py-2 car-location p-3">
            <h6>Car Rental Location</h6>
            <div class="row py-2">
                <div class="col-5">
                    <div class="row">
                        <h6 class="fs-6">
                            pickup date
                        </h6>
                        <div class="col-4">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="col-8">
                            <p>
                                {{$listedCar->pickup_date}} &nbsp; {{$listedCar->pickup_time}}
                            </p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4">
                            <i class="fa fa-location"></i>
                        </div>
                        <div class="col-8">
                            <p>{{$listedCar->pickup_location}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-5 mx-3">
                    <h6 class="fs-6 ">Return date</h6>
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fas fa-calendar-alt"></i>
                        </div>
                        <div class="col-8">
                            <p>
                                {{$listedCar->dropoff_date}} &nbsp; {{$listedCar->dropoff_time}}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-4 mx-4 car-price-details p-3">
        <div class="row ">

            <small class="text-success">Free cancellation</small>
            <small>pay at pickup</small>
        </div>
        <div class="row my-2">
            <h6 class="fs-5">price details</h6>
            <div class="row">
                <div class="col-6">
                    <small>car rental fee</small>
                </div>
                <div class="col-6">
                    <small>
                        <h6>{{$listedCar->total_cost}} /day </h6>
                    </small>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <small>number of days</small>
                </div>
                <div class="col-6">
                    <small>
                        <h6>2 </h6>
                    </small>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <small>Total</small>
                </div>
                <div class="col-6">
                    <small>
                        <h6>$100</h6>
                    </small>
                </div>

            </div>
            <div class="row text-center my-2">
                <div class="col-2">
                    <input type="checkbox" name="" id="">
                </div>
                <div class="col-10">
                    <p class=" fs-6">I agree to<a href="http://">CarRentKE</a>terms and conditions</p>
                </div>
            </div>
            <div class="row text-center">
                <button class="btn btn-primary fs-5 " wire:click='rideRequest({{$listedCar->id}})'>Request</button>
            </div>
        </div>
    </div>

    <div class="row my-3 ">
        <div role="tabpanel" class="tab-pane" id="accessories">
            <!--Accessories-->
            <table class="table" width="60">
                <thead>
                    <tr>
                        <th colspan="2">Accessories</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Air Conditioner</td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                    </tr>

                    <tr>
                        <td> AntiLock Braking System</td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>Central Locking</td>
                        <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row car-images my-3">

        </div>
        <div class="row cardmy-2 card d-inline">
            <div class="row card-header h3 d-flex justify-content-between">
                <div class="col-6">
                    <div class="text-start d-flex">
                        <a href="javascript:history.back()"><i class="fa fa-arrow-circle-left mx-2"></i></a>
                        <h6 class="h3">Riders feedback</h6>

                    </div>
                </div>
                <div class="col-6 ml-auto">
                    <div class="text-end"><a href="">See more</a></div>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="well well-sm">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 text-center">
                                        <h1 class="rating-num">
                                            4.0</h1>
                                        <div class="rating">
                                            <span class="fa fa-star"></span><span class="fa fa-star">
                                            </span><span class="fa fa-star"></span><span class="fa fa-star">
                                            </span><span class="fa fa-star-empty"></span>
                                        </div>
                                        <div>
                                            <span class="fa fa-user"></span>1,050,008 total
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row rating-desc">
                                            <div class="col-xs-3 col-md-3 text-right">
                                                <span class="fa fa-star"></span>5
                                            </div>
                                            <div class="col-xs-8 col-md-9">
                                                <div class="progress progress-striped">
                                                    <div class="progress-bar progress-striped progress-bar-success"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 80%">
                                                        <span class="">80%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end 5 -->
                                            <div class="col-xs-3 col-md-3 text-right">
                                                <span class="fa fa-star"></span>4
                                            </div>
                                            <div class="col-xs-8 col-md-9">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" role="progressbar"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 60%">
                                                        <span class="">60%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end 4 -->
                                            <div class="col-xs-3 col-md-3 text-right">
                                                <span class="fa fa-star"></span>3
                                            </div>
                                            <div class="col-xs-8 col-md-9">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%">
                                                        <span class="">40%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end 3 -->
                                            <div class="col-xs-3 col-md-3 text-right">
                                                <span class="fa fa-star"></span>2
                                            </div>
                                            <div class="col-xs-8 col-md-9">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 20%">
                                                        <span class="">20%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end 2 -->
                                            <div class="col-xs-3 col-md-3 text-right">
                                                <span class="fa fa-star"></span>1
                                            </div>
                                            <div class="col-xs-8 col-md-9">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 15%">
                                                        <span class="">15%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end 1 -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="row-divider">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">nktailor</a></div>
                            <div class="review-block-date">January 29, 2016<br />1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was
                                nice in buy. this was nice in buy this was nice in buy this was nice in buy this was
                                nice in buy this was nice in buy</div>
                        </div>
                    </div>
                    <hr />
                </div>
            </div>
        </div>

    </div>