<form class="car-search d-flex" wire:submit.prevent="search">
    <div class="input-wrapper" id="pickupPlace">
        <label class="input-label" for="pickup-place">Pickup Place & return Place </label>
        <input class="input-field" type="text" id="pickup-place" name="pickup-place"
            placeholder="Enter pickup & dropoff place" wire:model.live='pickup_place' required>

    </div>

    <div class="input-wrapper">
        <label class="input-label" for="pickup-date">Pickup Date</label>
        <input class="input-field" type="date" id="pickup-date" name="pickup-date" wire:model.live='pickup_date'
            required>
        @error('pickup_date') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="input-wrapper">
        <label class="input-label" for="pickup-time">Pickup Time</label>
        <input class="input-field" type="time" id="pickup-time" name="pickup-time" wire:model='pickup_time' required>
    </div>
    <div class="input-wrapper">
        <label class="input-label" for="pickup-date">Return Date</label>
        <input class="input-field" type="date" id="pickup-date" name="pickup-date" wire:model.live='return_date'
            required>
        @error('return_date') <span class="error">{{ $message }}</span> @enderror

    </div>
    <div class="input-wrapper">
        <label class="input-label" for="drop-off-time">Return Time</label>
        <input class="input-field" type="time" id="drop-off-time" placeholder="12:00 AM" name="drop-off-time"
            wire:model='return_time' required>
    </div>
    <div class="input-wrapper  ">
        <button class=" btn btn-primary py-2" type="submit">Search</button>
    </div>

</form>