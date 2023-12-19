<div class="card">
    <div class="card-header text-start">
        <div class="card-title">Feedback</div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <div class="card  px-3 py-3">
                    <div class="row"><strong class="text-warning text-start">{{$driverAverageRating}}/5</strong></div>
                    <div class="row  ">
                        <p class="d-flex text-center  text-warning">
                            @for ($i = 0; $i < $driverAverageRating; $i++) <span><i class="fa fa-star"></i></span>
                                @endfor
                        </p>


                    </div>
                    <div class="row ">
                        <p class="text-start">{{$countReviewers}} verified ratings</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <h6 class="f6-6 text-start">reviews</h6>

                @foreach ($reviews as $review)
                <div class="card p-2">

                    <div class="row text-start">
                        <small class="f6 my-2 text-primary">{{$review->driverRater->user->firstName . "
                            ".$review->driverRater->user->lastName}}</small>
                    </div>
                    <div class="row review body">
                        <p class="text-start">
                            {{$review->review_comments}}
                        </p>

                    </div>
                    <div class="row">
                        <p class="text-start">
                            <small class="text-start">{{$review->updated_at}} &nbsp; by &nbsp;
                                {{$review->driverRater->user->firstName . "
                                ".$review->driverRater->user->lastName}}
                            </small>
                            <small class="text-end text-success">
                                verified booking
                            </small>
                        </p>

                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>