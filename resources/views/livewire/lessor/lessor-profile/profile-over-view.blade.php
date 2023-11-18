<div class="card">
    <div class="card-header h3 text-start">
        Profile overview
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-lg-2 col-md-4 col-sm-12">
                <div class="text-center">
                    <img src="{{Storage::url(Auth::user()->profile_image)}}" class=" img img-fluid profilePhoto"
                        alt="profile photo">
                </div>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
                <p class="text-start h3">
                    <strong>{{$firstName }} &nbsp; {{$surName}}</strong>
                </p>
                <p class="text-start h3">
                    <small class="text-primary fs-6 text-sm">ID NO</small>&nbsp {{$idNumber}}
                </p>

                <table class="table">
                    <tr class="text-start">

                        <th scope="col ">mobile:</th>
                        <th scope="col ">email</th>
                        <th scope="col ">date of birth</th>
                    </tr>
                    <tr class="text-start">
                        <td scope="col ">{{$mobile}}</td>
                        <td scope="col " class="text-success">{{$email}}</td>
                        <td scope="col ">{{$dob}}</td>
                    </tr>


                </table>

            </div>
            <div class="col-lg-1 col-md-2 col-sm-12 ">
                <p class="text-end">
                    <button class="btn d-flex">
                        <span class="text-danger">edit <i class="fa fa-edit"></i></span>

                    </button>
                </p>

            </div>
        </div>
    </div>
</div>