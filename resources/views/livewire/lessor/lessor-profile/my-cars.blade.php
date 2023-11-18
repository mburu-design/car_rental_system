<div class="card">
    <div class="card-header">
        <div class="row g-2">
            <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                <div class="h3">MY CARS</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-end">
                <a href="/car/register" class="btn btn-success">ADD CAR</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">car ID</th>
                    <th scope="col">Make</th>
                    <th scope="col">model</th>
                    <th scope="col">number plate</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($myCar as $car)
                @php
                $carId = DB::table('listings')->where('fleet_id', $car->id)->first();
                @endphp
                <tr>
                    <th scope="row"><a href="#" class="link">{{$car->id}}</a></th>
                    <td>{{$car->make}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->car_registration_number}}</td>

                    <td>
                        <div class="btn-group w-100" role="group">
                            @if ($carId)
                            <button type="button" class="btn btn-success disabled" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">List online</button>

                            @else
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">List online</button>

                            @endif
                            <button type="button" class="btn btn-danger" wire:click='deleteCar({{$car->id}})'>remove
                                car</button>
                        </div>
                    </td>
                    {{-- <td><button class="btn btn-danger">Delete</td> --}}
                </tr>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">List your car</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="">
                                    <div class="row g-4">
                                        <div class=" col" id="pickupPlace">
                                            <label class="input-label text-start" for="pickup-place">Pickup Place &
                                                return
                                                Address</label>
                                            <input class="input-field" type="text" id="pickup-place" name="pickup-place"
                                                placeholder="pickup & dropoff place" wire:model='pickupAddress'
                                                required>
                                            @error('pickupAddress') <span class="error">{{ $message }}</span> @enderror

                                        </div>

                                        <div class=" col">
                                            <label class="input-label text-start" for="pickup-date">Pickup Date</label>
                                            <input class="input-field" type="date" id="pickup-date" name="pickup-date"
                                                wire:model.live='pickupDate' required>
                                            @error('pickupDate') <span class="error">{{ $message }}</span> @enderror

                                        </div>

                                        <div class=" col">
                                            <label class="input-label text-start" for="pickup-time">Pickup Time</label>
                                            <input class="input-field" type="time" id="pickup-time" name="pickup-time"
                                                wire:model='pickupTime' required>

                                        </div>
                                        <div class=" col">
                                            <label class="input-label text-start" for="drop-off-time">Return
                                                date</label>
                                            <input class="input-field" type="date" id="drop-off-time"
                                                placeholder="12:00 AM" name="drop-off-date" wire:model.live='returnDate'
                                                required>
                                            @error('returnDate') <span class="error">{{ $message }}</span> @enderror

                                        </div>
                                        <div class=" col">
                                            <label class="input-label text-start" for="drop-off-time">Return
                                                Time</label>
                                            <input class="input-field" type="time" id="drop-off-time"
                                                placeholder="12:00 AM" name="drop-off-time" wire:model='returnTime'
                                                required>
                                        </div>

                                        <div class=" col">
                                            <label class="input-label text-start" for="drop-off-time">Cost per
                                                day</label>
                                            <input class="input-field" type="text" id="amount" placeholder="eg KES 1500"
                                                name="LeaseCost" wire:model='costPerDay' required>
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="btn btn-primary"
                                    wire:click='addToListing({{$car->id}})'>ADD
                                    LISTING</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>

    </div>
</div>