<div>
    <div class="card row d-flex">
        <div class="col-12 h4 text-center ms-3 py-2">
            {{$user->count()}} registerd users
        </div>
        <form action="" wire:submit.prevent='searchUser'>
            <div class="input-group mb-3 ">
                <input type="email" class="form-control" placeholder="Search user with email"
                    aria-label="Recipient's username" aria-describedby="basic-addon2" wire:model='userQuery' required>
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit">search</button>
                </div>
            </div>
        </form>

    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"> ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Tel</th>
                <th scope="col">Email</th>
                <th scope="col"> type</th>

                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($queryResults)
            @if ($queryResults->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO user(s) found</td>
            </tr>
            @else

            @foreach ($queryResults as $user)
            <tr>
                <th scope="row"><a href="/user/profile/{{$user->id}}">{{$user->id}}</a></th>
                <td>{{$user->firstName." ".$user->lastName}}</td>
                <td><a href="{{$user->telephone}}">{{$user->telephone}}</a></td>
                <td><a href="{{$user->email}}">{{$user->email}}</a></td>
                <td>{{$user->isAdmin == 1 ? "ADMIN" : "user"}} </td>
                <td>
                    <ul class="d-flex">
                        <li><button class="btn" wire:click='editUser({{$user->id}})'><i class="fa fa-edit"></i></button>
                        </li>
                        <li><button class="btn " wire:click='deleteUser({{$user->id}})'><i
                                    class="fa fa-trash text-primaryr"></i></button></li>

                    </ul>
                </td>

            </tr>
            @endforeach
            @endif
            @else

            @if ($user->isEmpty())
            <tr>
                <td colspan="7" class="text-center text-danger h3">NO REGISTERED USERS</td>
            </tr>
            @else
            @foreach ($user as $user)
            <tr>
                <th scope="row"><a href="/user/profile/{{$user->id}}">{{$user->id}}</a></th>
                <td>{{$user->firstName." ".$user->lastName}}</td>
                <td><a href="{{$user->telephone}}">{{$user->telephone}}</a></td>
                <td><a href="{{$user->email}}">{{$user->email}}</a></td>
                <td>{{$user->isAdmin == 1 ? "ADMIN" : "user"}} </td>
                <td>
                    <ul class="d-flex">
                        <li><button class="btn" wire:click='banUser({{$user->id}})'><i
                                    class="fa fa-ban text-primary"></i></button>
                        </li>
                        @if ($user->isAdmin == 1)
                        <li><button class="btn disabled" wire:click='deleteUser({{$user->id}})'><i
                                    class="fa fa-trash text-danger"></i></button></li>
                        @else
                        <li><button class="btn " wire:click='deleteUser({{$user->id}})'><i
                                    class="fa fa-trash text-danger"></i></button></li>
                        @endif


                    </ul>
                </td>

            </tr>
            @endforeach
            @endif
            @endif



        </tbody>
    </table>
</div>