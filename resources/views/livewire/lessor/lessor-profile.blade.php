<div class="row my-4 text-center container" style="padding-top:20px;">
    <h6 class="fs-6 py-4 text-start h3">
        Lessor profile
    </h6>

    <div class="container row rider-profile">
        <div class="col-3 h-100">
            <aside class="card ">
                <div class="row  mx-2 my-3 ">
                    <button class="d-flex nav-link">
                        <div class="col-2 icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-10  description" wire:click="defaultView">
                            profile overview
                        </div>
                    </button>
                </div>
                <div class="row mx-2 my-3 ">
                    <button class="nav-link  d-flex" wire:click="myRequest">
                        <div class="col-2 icon">
                            <i class="fa fa-taxi"></i>
                        </div>
                        <div class="col-10 description">
                            My Cars
                        </div>
                    </button>
                </div>

                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myReservation">
                        <div class="col-2 icon">
                            <i class="fa fa-ticket"></i>
                        </div>
                        <div class="col-10 description">
                            My online listing
                        </div>
                    </button>
                </div>
                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myRides">
                        <div class="col-2 icon">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="col-10 description">
                            My Car Leases
                        </div>
                    </button>
                </div>
                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myRatings">
                        <div class="col-2 icon color-primary">
                            <span class="fa fa-star checked "></span>

                        </div>
                        <div class="col-10 description">
                            My Car ratings
                        </div>
                    </button>


                </div>
                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myInbox">
                        <div class="col-2 icon">
                            <i class="fa fa-message"></i>
                        </div>
                        <div class="col-10 description">
                            New Requests
                        </div>
                    </button>


                </div>
                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myPayments">
                        <div class="col-2 icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <div class="col-10 description">
                            Payment Details
                        </div>
                    </button>
                    <div class="row mx-2 my-3">
                        <button class="nav-link  d-flex" wire:click="myPayments">

                        </button>

                    </div>
            </aside>
        </div>
        <div class="col-9">
            <div class="card">
                @if ($setView==0)
                @livewire('lessor.lessor-profile.profile-over-view')

                @elseif ($setView==1)
                @livewire('lessor.lessor-profile.my-cars')


                @elseif($setView==2)
                @livewire('lessor.lessor-profile.my-online-listings')

                @elseif($setView==3)
                @livewire('lessor.lessor-profile.my-leases')

                @elseif($setView==4)
                @livewire('lessor.lessor-profile.my-car-ratings')

                @elseif($setView==5)

                @livewire('lessor.lessor-profile.my-car-requests')

                @elseif($setView==6)
                @livewire('lessor.lessor-profile.payments')

                @elseif($setView==7)
                <h1>{{$setView}}</h1>

                @else
                @livewire('lessor-profile.account-overview')

                @endif

            </div>
        </div>
        <script>

        </script>
    </div>
</div>