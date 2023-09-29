<div class="container row car-details">
    <div class="col-7 mr-3">
        <div class="row car-specs">
            <h3 class="fs-3">compact</h3>
            <h6>toyota premio</h6>
            <div class="row my-3">
                <div class="col-3">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-10 d-flex">
                            <p>4 passengers</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-gears"></i>
                        </div>
                        <div class="col-10">
                            <p>automatic</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="col-10">
                            <p> 1500 cc</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-gas-pump"></i>
                        </div>
                        <div class="col-8">
                            <p>diesel</p>
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
                            <p>2008</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <figure class="card-banner">
                        <img src="/images/bannerImages/car-1.jpg" alt="Volkswagen T-Cross 2020" loading="lazy" class=" img img-fluid rounded w-100">
                      </figure>
                </div>
            </div>
        </div>
        <div class="row my-4 py-2 car-location">
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
                                <?php
                                echo today();
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-4">
                            <i class="fa fa-location"></i>
                        </div>
                        <div class="col-8">
                            <p>nairobi</p>
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
                                <?php
                                echo today();
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-4">
                            <i class="fa fa-location"></i>
                        </div>
                        <div class="col-8">
                            <p>
                                <?php
                                echo today();
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 mx-4 car-price-details">
        <div class="row ">
            <h4 class="fs-5">$50/day</h4>
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
                    <small><h6>$50 /day </h6></small>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <small>number of days</small>
                </div>
                <div class="col-6">
                    <small><h6>2 </h6></small>
                </div>
                
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <small>Total</small>
                </div>
                <div class="col-6">
                    <small><h6>$100</h6></small>
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
                <button class="btn btn-primary fs-5">Reserve</button>
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
<div class="row car-images">
    
</div>
</div>
