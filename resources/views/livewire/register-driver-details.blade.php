<div class="mask d-flex align-items-center h-100 gradient-custom-3" style="padding-top: 80px">

    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    {{-- <div class="card-header">
                        <figure>
                            <img style="height: 200px; width:100%" class="img img-fluid"
                                src="/images/bannerImages/car7-.jpg" alt="">
                        </figure>
                    </div> --}}
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Create driver's account</h2>
                        @if (session('error'))
                        <div class="alert error text-center">
                            {{ session('error') }} !
                        </div>
                        @endif
                        <form wire:submit.prevent="driverRegister">

                            <div class="form-outline">
                                <label class="form-label" for="form3Example1cg">ID NUMBER</label>
                                <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                    wire:model.blur="ID_number" />
                                @error('ID_number')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class=" form-outline mb-4">
                                <label class="form-label" for="form3Example4cg">DRIVER LICENCE NUMBER</label>
                                <input type="text" id="password" class="form-control form-control-lg"
                                    wire:model.blur="driver_license_number" />
                                @error('driver_license_number')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class=" input-group form-outline mb-4">
                                <label class="form-label" for="form3Example4cg">phone</label>
                                <span class="input-group-text" id="basic-addon1">+254</span>
                                <input type="tel" id="password" class="form-control form-control-lg"
                                    wire:model.blur="phoneNumber" value="{{$payment_phone}}" />
                                @error('payment_phone')
                                <label for="error" class="error">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="button w-100"
                                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body w-100">Submit
                                    In</button>
                            </div>

                            {{-- <p class="text-center text-muted mt-5 mb-0">No account? <a href="{{Route('register')}}"
                                    class="fw-bold text-body"><u>Create Account here</u></a></p> --}}

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>