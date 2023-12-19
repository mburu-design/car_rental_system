<div>
    <div class="card row d-flex">
        <div class="col-12 h4 text-center ms-3 py-2">
            {{$fleets->count()}} registerd cars
        </div>
        <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="Search Car" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">search</button>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"> ID</th>
                <th scope="col">image</th>
                <th scope="col">Reg No</th>
                <th scope="col">brand</th>
                <th scope="col">body type</th>
                <th scope="col">model</th>
                <th scope="col">year</th>
                <th scope="col" class="text-center">Action</th>


            </tr>
        </thead>
        <tbody>
            @if ($fleets->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO Fleets</td>
            </tr>
            @else
            @foreach ($fleets as $car)
            <tr>
                <th scope="row"><a href="#">{{$car->id}}</a></th>
                <td class="" width='75'><img src="{{Storage::url("$car->exterior_front_image")}}" alt="" class="img
                    img-fluid
                    rounded">
                </td>
                <td>{{$car->car_registration_number}}</td>
                <td>{{$car->make}}</td>
                <td>{{$car->category}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->year}}</td>
                <td>
                    <ul class="d-flex">
                        <li><button class="btn"><i class="fa fa-edit"></i></button></li>
                        <li><button class="btn " wire:click='deleteCar({{$car->id}})'><i
                                    class="fa fa-trash text-danger"></i></button></li>

                    </ul>
                </td>

            </tr>
            @endforeach
            @endif


        </tbody>
    </table>
</div>