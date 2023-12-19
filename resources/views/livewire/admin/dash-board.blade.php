<div style="padding-top: 100px" class="container">
    <div class="row">
        <div class="row ">
            <div class="col-12 text-center">
                @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
        <div class="col-3">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                <div class="position-sticky">
                    <div class="list-group  mx-3 mt-4">
                        <a href="#" class="list-group-item  py-2 ripple nav-link" aria-current="true"
                            x-on:click="$wire.setCurrentComponent('dashboard')">
                            <i class="fas fa-tachometer-alt fa-fw "></i><span>Dashboard</span>
                        </a>
                        <a href="#" class="list-group-item  py-2 ripple nav-link"
                            x-on:click="$wire.setCurrentComponent('users')"><i
                                class="fas fa-user fa-fw me-3"></i><span>Users </span></a>
                        <a href="#" class="list-group-item  py-2 ripple nav-link"
                            x-on:click="$wire.setCurrentComponent('riders')">
                            <i class=" me-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-steering-wheel" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="9" />
                                    <circle cx="12" cy="12" r="2" />
                                    <line x1="12" y1="14" x2="12" y2="21" />
                                    <line x1="10" y1="12" x2="3.25" y2="10" />
                                    <line x1="14" y1="12" x2="20.75" y2="10" />
                                </svg>
                            </i>
                            <span>Riders</span>
                        </a>
                        <a href="#" class="list-group-item  py-2 ripple nav-link"
                            x-on:click="$wire.setCurrentComponent('lessors')">
                            <i class="  text-primary me-3">
                                <img width="24" height="24" src="https://img.icons8.com/wired/64/car-rental.png"
                                    alt="car-rental" /></i>
                            <span>Lessors</span>
                        </a>
                        <a href="#" class="list-group-item  py-2 ripple  nav-link"
                            x-on:click="$wire.setCurrentComponent('fleet')">
                            <i class="fa-solid fa-car me-3"></i><span>Fleets</span>
                        </a>
                        <a href="#" class="list-group-item  py-2 ripple nav-link "
                            x-on:click="$wire.setCurrentComponent('listings')"><i
                                class="fas fa-list fa-fw me-3"></i><span>Listings</span></a>
                        <a href="#" class="list-group-item  py-2 ripple nav-link"
                            x-on:click="$wire.setCurrentComponent('riderequest')"><i
                                class="fas fa-hand-holding me-3"></i><span>Ride Requests</span></a>
                        <a href="#" class="list-group-item  py-2 ripple nav-link "
                            x-on:click="$wire.setCurrentComponent('bookings')"><i
                                class="fas fa-book fa-fw me-3"></i><span>Bookings</span></a>
                        <a href="#" class="list-group-item  py-2 ripple nav-link "
                            x-on:click="$wire.setCurrentComponent('trasactions')"><i
                                class="fa-solid fa-money-bill-transfer"></i><span>Transactions</span></a>

                        <a href="#" class="list-group-item  py-2 ripple  nav-link"
                            x-on:click="$wire.setCurrentComponent('settings')"><i
                                class="fas fa-gear fa-fw me-3"></i><span>Settings</span></a>
                        <a href="/logout" class="list-group-item  py-2 ripple nav-link  "><i
                                class="fas fa fa-sign-out fa-fw me-3"></i><span>logout</span></a>
                    </div>
                </div>
            </nav>
            <!-- Sidebar -->

        </div>
        <div class="col-lg-9 col-md-8 col-sm-12 py-4 content">
            @switch($currentComponent)

            @case('dashboard')
            @livewire('admin.default-dashboard')
            @break
            @case('users')
            @livewire('admin.manage-users')
            @break
            @case('riders')
            @livewire('admin.manage-riders')
            @break
            @case('lessors')
            @livewire('admin.manage-lessors')
            @break
            @case('fleet')
            @livewire('admin.manage-fleets')
            @break
            @case('listings')
            @livewire('admin.manage-listings')
            @break
            @case('riderequest')
            @livewire('admin.manage-ride-requests')
            @break
            @case('bookings')
            @livewire('admin.manage-bookings')
            @break
            @case('trasactions')
            @livewire('admin.manage-transactions')
            @break
            @case('settings')
            @livewire('admin.settings')
            @break
            @default
            @livewire('admin.default-dashboard')
            @endswitch

        </div>
    </div>
</div>
</div>