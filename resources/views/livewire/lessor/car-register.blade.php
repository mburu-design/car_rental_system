<div class="car_register_form d-flex justify-content-center">
    <form action="#" class="row w-50 p-2 my-2" wire:submit.prevent='carRegister' style="">
        <p class=" h3">Car registration form</p>
        <div class="row  g-2">
            <label for="driverDetails" class="form-label text-start h3">Insurance details</label>
            <div class=" col-lg-6 col-md-6 col-sm-12 form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="insurance provider"
                    wire:model="insuranceProvider">
                <label for="insurance-provider" class="input-label">insurance provider</label>
                @error('insuranceProvider')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-12 form-floating">
                <input type="text" class="form-control" id="floatingPassword" wire:model="policyNumber"
                    placeholder="insurance policy number">
                <label for="insurance-policy-number" class="input-label">insurance policy number</label>

                @error('policyNumber')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <hr class="row-divider">

        <div class="row  g-2">
            <label for="driverDetails" class="form-label text-start h3">Car details</label>
            <div class=" col-lg-8 col-md-6 col-sm-12 form-floating mb-3">

                <div class="row g-3">
                    <label for="regNumber" class="input-label">REG number</label>
                    <div class="col-5">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="K" aria-label="Username" value="K"
                                disabled wire:model='firstLetter1'>
                            <select class="form-select form-control" aria-label="Default select example"
                                wire:model='secondLetter2'>
                                @foreach (range('A', 'D') as $letter)
                                <option value="{{$letter}}">{{$letter}}</option>
                                @endforeach
                            </select>
                            <select class="form-select form-control" aria-label="Default select example"
                                wire:model='thirdLetter3'>
                                @foreach (range('A', 'Z') as $letter)
                                <option value="{{$letter}}">{{$letter}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="input-group mb-3">
                            <select class=" form-control" aria-label="Default select example" wire:model='firstDigit4'>
                                @foreach (range(0, 9) as $num)
                                <option value="{{$num}}">{{$num}}</option>
                                @endforeach
                            </select>
                            <select class=" form-control" aria-label="Default select example" wire:model='secondDigit5'>
                                @foreach (range(0, 9) as $num)
                                <option value="{{$num}}">{{$num}}</option>
                                @endforeach
                            </select>
                            <select class=" form-control" aria-label="Default select example" wire:model='thirdDigit6'>
                                @foreach (range(0, 9) as $num)
                                <option value="{{$num}}">{{$num}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group mb-3">
                            <select class=" form-control" aria-label="Default select example" wire:model='lastLetter7'>
                                @foreach (range('A', 'Z') as $char)
                                <option value="{{$char}}">{{$char}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-12 form-floating">
                <div class="row g-3">
                    <label for="floatingPassword" class="input-label">make year</label>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <select class="form-select form-control" aria-label="Default select example"
                                wire:model='makeYear'>
                                <option>--------</option>

                                @foreach (range(2005, 2023) as $num)
                                <option value="{{$num}}">{{$num}}</option>
                                @endforeach
                            </select>
                            @error('makeYear') <span class="error">{{ $message }}</span> @enderror

                        </div>
                    </div>
                </div>

            </div>
            <div class="row g-3">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <label for="floatingPassword" class="input-label">Body type</label>
                        <select class="form-select form-control" aria-label="Default select example"
                            wire:model='bodyType'>
                            <option>--------</option>
                            @foreach ( $categories as $category)
                            <option value="{{$category}}">{{$category}}</option>
                            @endforeach
                        </select>
                        @error('bodyType') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <label for="floatingPassword" class="input-label">Brand</label>
                        <select class="form-select form-control" aria-label="Default select example"
                            wire:model.live='brand'>
                            <option>--------</option>
                            @foreach ( $cars as $car)
                            <option value="{{$car['brand']}}">{{$car['brand']}}</option>
                            @endforeach
                        </select>
                        @error('brand') <span class="error">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <label for="carBrand" class="input-label">Model</label>
                        <select class="form-select form-control" aria-label="Default select example"
                            wire:model.live='carModel'>
                            <option>--------</option>

                            @foreach ( $cars as $car)
                            @if ($car['brand'] === $brand)
                            @foreach ($car['models'] as $model)
                            <option value="{{$model['title'] }}">{{ $model['title'] }}</option>
                            @endforeach
                            @endif
                            @endforeach
                        </select>
                        @error('carModel') <span class="error">{{ $message }}</span> @enderror

                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class=" col-lg-6 col-md-6 col-sm-12 form-floating mb-3">
                    <div class="input-group mb-3">
                        <label for="fuelType" class="input-label">Fuel type</label>
                        <select class="form-select form-control" aria-label="Default select example"
                            wire:model.live='fuelType'>
                            <option>--------</option>

                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>
                        </select>

                    </div>
                    @error('fuelType') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12 form-floating">
                    <div class="input-group mb-3">
                        <label for="transmissionType" class="input-label">Transmission type</label>
                        <select class="form-select form-control" aria-label="Default select example"
                            wire:model='transmission'>
                            <option>--------</option>
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                    </div>
                    @error('transmission') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class="row g-2">
                    <div class=" col-lg-6 col-md-6 col-sm-12 form-floating mb-3">
                        <div class="input-group mb-3">
                            <label for="number-of-seats" class="input-label">Number of Seats</label>
                            <select class="form-select form-control" aria-label="Default select example"
                                wire:model='numberOfseats'>
                                <option>--------</option>
                                @foreach (range(2, 18) as $num)
                                <option value="{{$num}}">{{$num}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('numberOfseats') <span class="error">{{ $message }}</span> @enderror

                    </div>
                    <div class=" col-lg-6 col-md-6 col-sm-12 form-floating">
                        <div class="input-group mb-3">
                            <label for="number-of-doors" class="input-label">Number of doors</label>
                            <select class="form-select form-control" aria-label="Default select example"
                                wire:model='numberOfdoors'>
                                <option>--------</option>
                                @foreach (range(2, 4) as $num)
                                <option value="{{$num}}">{{$num}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('numberOfdoors') <span class="error">{{ $message }}</span> @enderror

                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="mb-3 col-12">
                    <label for="image" class="input-label">Exterior front image</label>
                    <input class="form-control" type="file" id="formFile" wire:model="exteriorFrontImage">
                    @error('exteriorFrontImage') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3 col-12">
                    <label for="image" class="input-label">Exterior side image</label>
                    <input class="form-control" type="file" id="formFile" wire:model="exteriorSideImage">
                    @error('exteriorSideImage') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3 col-12">
                    <label for="image" class="input-label">Exterior rear image</label>
                    <input class="form-control" type="file" id="formFile" wire:model="exteriorRearImage">
                    @error('exteriorRearImage') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3 col-12">
                    <label for="formFile" class="input-label">Interior front image</label>
                    <input class="form-control" type="file" id="formFile" wire:model="interiorFrontImage">
                    @error('interiorFrontImage') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3 col-12">
                    <label for="formFile" class="input-label">Interior back image</label>
                    <input class="form-control" type="file" id="formFile" wire:model="interiorBackImage">
                    @error('interiorBackImage') <span class="error">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="row">
                <div class="my-3 col-12">
                    <button type="submit" class="btn btn-primary w-100">register your car</button>
                </div>
            </div>
    </form>
</div>