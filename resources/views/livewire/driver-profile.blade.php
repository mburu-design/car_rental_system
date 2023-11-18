<div class=" container d-flex justify-content-center" style="padding-top: 80px">
    <div class="row text-start "><a href="javascript:history.back()"><i class="fa fa-arrow-circle-left"></i> Back</a>
    </div>
    <div class="row card w-50 my-4 align-items-center" id="driverprofile">
        <div class=" row   my-2">
            <figure class="pt-2">
                <img src="{{Storage::url(Auth::user()->profile_image)}}" alt="" class="img-fluid mx-auto profilePhoto">
                <figcaption>
                    <h6 class="h6 text-center my-2">{{Auth::user()->firstName}} &nbsp; {{Auth::user()->lastName}}</h6>
                </figcaption>
            </figure>
        </div>

        <div class="row g-3 ">
            <div class="col  text-center numberoftrips">
                <p class="h6">43</p>
                <label for="">Trips</label>
            </div>
            <div class="col  d-block text-center ratings">
                <p class=" h6">4.6 <i class="fa fa-star"></i></p>
                <label for="" class="">ratings</label>
            </div>
            <div class=" col joinedsince">
                <p class="h6">2</p>
                <label for="">Years</label>

            </div>

        </div>
        <hr class="row mt-2 row-divider">

        <div class="row  d-flex phone">

            <p class="text-start d-flex"> Telephone : <a href="tel:+254713408025">0713408025</a></p>
        </div>
        <div class="row email">
            <p class=" d-flex">Email : <a href="mailto:mburukennedy67@gmail.com">mburukennedy67@gmail.com</a></p>

        </div>
        <hr class="row row-divider">
        <div class="row  py-2 ">
            @livewire('profile.driver-ratings')
        </div>
    </div>
</div>