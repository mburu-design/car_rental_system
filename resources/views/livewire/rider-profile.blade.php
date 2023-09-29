<section class="">
    <div class="row my-4 text-center container">
        <h6 class="fs-6">
            rider profile
        </h6>
    </div>
    <div class="container row rider-profile">
        <div class="col-3 h-100">
                <aside class="card ">
                    <div class="row rounded mx-2 my-3 ">
                        <div class="col-2 icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-10 description">
                            profile overview
                        </div>
                        
                    </div>
                    <div class="row mx-2 my-3 ">
                        <div class="col-2 icon">
                            <i class="fa fa-taxi"></i>
                        </div>
                        <div class="col-10 description">
                            Requests
                        </div>
                        
                    </div>
                    <div class="row mx-2 my-3">
                        <div class="col-2 icon">
                            <i class="fa fa-ticket"></i>
                        </div>
                        <div class="col-10 description">
                            Reservation
                        </div>
                        
                    </div>
                    <div class="row mx-2 my-3">
                        <div class="col-2 icon">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="col-10 description">
                            My rides
                        </div>
                        
                    </div>
                    <div class="row mx-2 my-3">
                        <div class="col-2 icon color-primary">
                            <span class="fa fa-star checked "></span>
                            
                        </div>
                        <div class="col-10 description">
                            Your ratings
                        </div>
                        
                    </div>
                    <div class="row mx-2 my-3">
                        <div class="col-2 icon">
                            <i class="fa fa-message"></i>
                        </div>
                        <div class="col-10 description">
                            Inbox
                        </div>
                        
                    </div>
                    <div class="row mx-2 my-3">
                        <div class="col-2 icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <div class="col-10 description">
                            Payment Details
                        </div>
                        
                    </div>
                </aside>
        </div>
        <div class="col-8">
            <div class="card">
                @livewire('profile.my-requests')
            </div>
        </div>
    </div>
</section>
