
    <form class="car-search d-flex">
        <div class="input-wrapper" id="pickupPlace">
            <label class="input-label"  for="pickup-place">Pickup Place & return  Place</label>
            <input class="input-field"   type="text" id="pickup-place" name="pickup-place" placeholder="Enter pickup & dropoff place">
        </div>

        <div class="input-wrapper">
            <label class="input-label"  for="pickup-date">Pickup Date</label>
            <input  class="input-field" type="date" id="pickup-date" name="pickup-date">
        </div>

        <div class="input-wrapper">
            <label class="input-label" for="pickup-time">Pickup Time</label>
            <input  class="input-field" type="time" id="pickup-time" name="pickup-time">
        </div>

        <div class="input-wrapper">
            <label class="input-label" for="drop-off-time">Return Time</label>
            <input class="input-field"  type="time" id="drop-off-time" placeholder="12:00 AM" name="drop-off-time">
        </div>
        <div class="input-wrapper  ">
            <button  class=" btn btn-primary py-2"   type="submit">Search</button>
        </div>
    </form>
