<section class="section featured-car mt-0" id="featured-car">
  <div class="container">

    {{-- <h3>hello {{$pickup_place}} br {{$pickup_date}} {{$pickup_time}} bt {{$return_time}} -{{$return_date}}</h3>
    --}}

    @if ($searchResults)
    <div class="title-wrapper">
      <h2 class="h2 section-title">Search results</h2>

      <a href="#" class="featured-car-link">
        <span>View more</span>

        <ion-icon name="arrow-forward-outline"></ion-icon>
      </a>
    </div>
    @if ($searchResults->isEmpty()) <h3> no results {{$pickup_time}}</h3>
    @endif
    @foreach ($searchResults as $result)
    <ul class="featured-car-list d-block">
      <li>
        <div class="featured-car-card d-flex my-2">

          <figure class="card-banner">
            <img src="{{Storage::url($result->fleet()->value('exterior_front_image'))}}" alt="car image" loading="lazy"
              width="440" height="300" class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">{{$result->fleet()->value('make')}} &nbsp; {{$result->fleet()->value('model')}}</a>
              </h3>

              <data class="year" value="2021">{{$result->fleet()->value('year')}}</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">{{$result->fleet()->value('number_of_seats')}} People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">{{$result->fleet()->value('category')}}</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">12km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">{{$result->fleet()->value('transmission_type')}}</span>
              </li>

            </ul>

          </div>
          <div class="card-content">
            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>KES{{$result->total_cost}}</strong> / day
              </p>

              <button class="btn fav-btn" aria-label="Add to favourite list">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn" onclick="location.href='/car/details/{{$result->fleet()->value('id')}}';"
                wire.navigate>Rent now</button>
            </div>
          </div>
        </div>
      </li>
    </ul>
    @endforeach
    {{-- end search results --}}
    @else
    <div class="title-wrapper">
      <h2 class="h2 section-title">Featured cars</h2>

      <a href="#" class="featured-car-link">
        <span>View more</span>

        <ion-icon name="arrow-forward-outline"></ion-icon>
      </a>
    </div>

    <ul class="featured-car-list d-block">
      @foreach ($listedCars as $car)

      <li>
        <div class="featured-car-card d-flex my-2">

          <figure class="card-banner">
            <img src="{{Storage::url($car->fleet()->value('exterior_front_image'))}}" alt="car image" loading="lazy"
              width="440" height="300" class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">{{$car->fleet()->value('make')}} &nbsp; {{$car->fleet()->value('model')}}</a>
              </h3>

              <data class="year" value="2021">{{$car->fleet()->value('year')}}</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">{{$car->fleet()->value('number_of_seats')}} People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">{{$car->fleet()->value('category')}}</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">12km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">{{$car->fleet()->value('transmission_type')}}</span>
              </li>

            </ul>

          </div>
          <div class="card-content">
            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>KES{{$car->total_cost}}</strong> / day
              </p>

              <button class="btn fav-btn" aria-label="Add to favourite list">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
              @if ($car->status=='booked')
              <button class="btn disabled">Booked</button>
              @else
              <button class="btn" onclick="location.href='/car/details/{{$car->fleet()->value('id')}}';"
                wire.navigate>Rent now</button>
              @endif

            </div>
          </div>
        </div>
      </li>
      @endforeach

    </ul>
    @endif


  </div>
</section>