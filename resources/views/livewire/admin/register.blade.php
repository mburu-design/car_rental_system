<div class="text-center d-flex justify-content-center" style="padding-top: 100px">
    <form action="#" class="row w-50 p-2 my-2" wire:submit.prevent='lessorRegister' style="">
        <p class=" h3">lessor registration form</p>
        <div class="row  g-3 mb-2 g-2">
            @if (session('error'))
            <h5 class="h3">
                {{error}}
            </h5>
            @endif
            <label for="driverDetails" class="form-label text-start h3">Lessor details</label>
            <div class=" col-lg-12 col-md-12 col-sm-12 form-floating mb-3">
                <label for="" class="from-label"></label>
                <div class="input-group">
                    <input type="text" class="form-control " id="floatingInput"
                        placeholder="{{Auth::user()->firstName}}" name="idNumber" value="{{Auth::user()->firstName}}"
                        wire:model='userName' disabled>
                </div>
            </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 form-floating mb-3">
                <div class="input-group">
                    <input type="text" class="form-control " id="floatingInput" placeholder="ID number" name="idNumber"
                        wire:model='idNumber'>
                </div>
            </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 form-floating">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon2">+254</span>
                    <input type="tel" class="form-control" id="floatingPassword" placeholder="payment phone number"
                        wire:model="paymentPhone">
                </div>
            </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 form-floating">
                <div class="input-group">
                    <button class="btn btn-primary w-100" type="submit">
                        click to register as a lessor
                    </button>
                </div>
            </div>
            <hr class="row-divider">
        </div>
    </form>
</div>