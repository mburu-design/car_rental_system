<div class="row my-4 text-center container" style="padding-top:20px;">
    <h6 class="fs-6 py-4 text-start">
        rider profile
    </h6>
    @if (session('message'))
    <p class="alert h3 alert-success">{{ session('message') }}</p>
    @endif
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
                            Requests
                        </div>
                    </button>
                </div>

                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myReservation">
                        <div class="col-2 icon">
                            <i class="fa fa-ticket"></i>
                        </div>
                        <div class="col-10 description">
                            Bookings
                        </div>
                    </button>
                </div>
                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myRides">
                        <div class="col-2 icon">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="col-10 description">
                            My rides
                        </div>
                    </button>
                </div>
                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myRatings">
                        <div class="col-2 icon color-primary">
                            <span class="fa fa-star checked "></span>

                        </div>
                        <div class="col-10 description">
                            Your ratings
                        </div>
                    </button>


                </div>
                <div class="row mx-2 my-3">
                    <button class="nav-link  d-flex" wire:click="myInbox">
                        <div class="col-2 icon">
                            <i class="fa fa-message"></i>
                        </div>
                        <div class="col-10 description">
                            Inbox
                        </div>
                    </button>


                </div>
                <div class="row mx-2 my-3">
                    <a href="{{ route('rider-profile.payments') }}" class="nav-link  d-flex">
                        <div class="col-2 icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <div class="col-10 description">
                            Payment Details
                        </div>
                    </a>
                    {{-- <button class="nav-link  d-flex" wire:click="myPayments">
                        <div class="col-2 icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <div class="col-10 description">
                            Payment Details
                        </div>
                    </button> --}}
                    <div class="row mx-2 my-3">
                        <button class="nav-link  d-flex" wire:click="myPayments">

                        </button>

                    </div>
            </aside>
        </div>
        <div class="col-9">
            <div class="card">

                @if (request()->route()->getName()== 'rider-profile.payments')
                @livewire('profile.payments')
                @endif
                @if ($setView==0)
                @livewire('profile.account-overview')

                @elseif ($setView==1)
                @livewire('profile.my-requests')

                @elseif($setView==2)
                @livewire('profile.my-bookings')

                @elseif($setView==3)
                @livewire('profile.my-rides')

                @elseif($setView==4)
                @livewire('profile.driver-ratings')

                @elseif($setView==5)
                @livewire('profile.notifications')



                @elseif($setView==7)
                <h1>{{$setView}}</h1>

                @else
                @livewire('profile.account-overview')

                @endif

            </div>
        </div>
        <script>

        </script>
    </div>
</div>