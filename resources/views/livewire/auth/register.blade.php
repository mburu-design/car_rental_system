
<div class="login-form d-flex align-items-center h-100 gradient-custom-3 my-4 ">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card py-4" style="border-radius: 15px;">
            <div class="card-header" >
                <figure>
                    <img style="height: 200px; width:100%" class="img img-fluid" src="/images/bannerImages/car7-.jpg" alt="">
                </figure>
            </div>
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
  
              <form  wire:submit.prevent="registerUser">
  
                <div class="mb-4 d-flex">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example1cg">First Name</label>
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"  wire:model.blur="firstName"/>
                        @error('firstName')
                            <span class="error">{{ $message }}</span>
                         @enderror
                      </div>

                      <div class="form-outline mx-1">
                        <label class="form-label" for="form3Example1cg">Surname </label>
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" wire:model.live="lastName" />
                        @error('lastName')
                         <span class="error">{{ $message }}</span>
                        @enderror
                      </div>
                </div>
                
                <div class="form-outline">
                    <label class="form-label" for="form3Example1cg">Email</label>
                      <input type="email" id="form3Example1cg" class="form-control form-control-lg" wire:model="email" />
                        @error('email')
                         <span class="error">{{ $message }}</span>
                        @enderror
                </div>
                   
                <div class=" input-group form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">phone</label>
                  <span class="input-group-text" id="basic-addon1">+254</span>  
                  <input type="tel" id="password" class="form-control form-control-lg"  wire:model.blur="telephone" />
                  @error('telephone')
                    <label for="error" class="error">{{ $message }}</label>
                  @enderror
               </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">date of birth</label>
                  <input type="date" id="form3Example3cg" class="form-control form-control-lg" wire:model.live="DOB" />
                     @error('DOB')
                         <span class="error">{{ $message }}</span>
                     @enderror
                </div>
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">profile image</label>

                  <input type="file" id="form3Example3cg" class="form-control form-control-lg" wire:model="profile_image" />
                   
                    @error('profile_image')
                        <span class="error ">{{ $message }}</span>
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
  
                <div class="input-group  form-outline  mb-4">
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    <input type="password" id="confirm_password" class="form-control form-control-lg" data-toggle="password" wire:model="confirm_password" />
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye-slash"></i> </span>  
                    @error('confirm_password')
                        <label for="error" class="error">{{ $message }}</label>
                    @enderror
                </div>
                
                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" wire:model='tosCheckbox' />
                    @error('name')
                        <label class="error">{{ $message }}</label>
                    @enderror
                  <label class="form-check-label d-flex" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u> &nbsp; Terms of service</u></a>
                  </label>
                </div>
  
                <div class="d-flex justify-content-center">
                  <button type="button w-100"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body w-100">Register</button>
                </div>
  
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{Route('login')}}"
                    class="fw-bold text-body"><u>Login here</u></a></p>
  
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
   
    
  </div> 
  
  
  
  
  