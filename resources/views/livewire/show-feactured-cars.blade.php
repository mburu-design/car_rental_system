<section class="section featured-car mt-0" id="featured-car">
  <div class="container">

    <div class="title-wrapper">
      <h2 class="h2 section-title">Featured cars</h2>

      <a href="#" class="featured-car-link">
        <span>View more</span>

        <ion-icon name="arrow-forward-outline"></ion-icon>
      </a>
    </div>

    <ul class="featured-car-list d-block">
      @for ($i = 0; $i < 5; $i++) <li>
        <div class="featured-car-card d-flex my-2">

          <figure class="card-banner">
            <img src="/images/bannerImages/limo.png" alt="Toyota RAV4 2021" loading="lazy" width="440" height="300"
              class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">Cardillac Escalade</a>
              </h3>

              <data class="year" value="2021">2021</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">4 People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">Hybrid</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">6.1km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">Automatic</span>
              </li>

            </ul>

          </div>
          <div class="card-content">

            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>$440</strong> / month
              </p>

              <button class="btn fav-btn" aria-label="Add to favourite list">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn">Rent now</button>
            </div>
          </div>
        </div>
        </li>
        @endfor
    </ul>
  </div>
</section>