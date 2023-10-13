
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
       
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
           
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-header" >
                <figure>
                    <img style="height: 200px; width:100%" class="img img-fluid" src="/images/bannerImages/car7-.jpg" alt="">
                </figure>
            </div>
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login into your account</h2>
                  @if (session('error'))
                  <div class="alert error text-center">
                      {{ session('error') }} !
                  </div>
                @endif
              <form  wire:submit.prevent="authenticate">

                <div class="form-outline">
                  <label class="form-label" for="form3Example1cg">Email</label>
                    <input type="email" id="form3Example1cg" class="form-control form-control-lg" wire:model.blur="email" />
                      @error('email')
                       <span class="error">{{ $message }}</span>
                      @enderror
                </div>
  
                <div class="input-group form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="password" class="form-control form-control-lg" data-toggle="password" wire:model.blur="password" />
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye-slash"></i> </span>  
                  @error('password')
                      <span class="error">{{ $message }}</span>
                  @enderror
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button w-100"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body w-100">Log In</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">No account? <a href="{{Route('register')}}"
                    class="fw-bold text-body"><u>Create Account  here</u></a></p>

              </form>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
