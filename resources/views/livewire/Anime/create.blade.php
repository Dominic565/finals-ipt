@role('user')
<div>
    <div class="card border border-light">
        <div class="card-header" style="background-color: rgba(127, 169, 199, 0.527)">
            <h3 class="mt-2">Add Anime</h3>
        </div>
        <div class="">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="author">
                <label for="author">Author</label>
                @error('author')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="email">
                    <label for="email">Email</label>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
       
        <div class="">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="description">
                <label for="description">Description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                 <select name="episode" class="form-select" wire:model.defer="episode">
                <option hidden="true">Select Episode</option>
                <option selected disabled>Select Episode</option>
                <option value="24">24</option>
                <option value="100">100</option>
                <option value="300">300</option>
                <option value="500">500</option>
                <option value="600">600</option>
                <option value="1054">1054</option>
                </select>
                <label for="episode">Episode</label>
                @error('episode')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="year_released" class="form-select" wire:model.defer="year_released">
                <option hidden="true">Select Year</option>
                <option selected disabled>Select Year</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                </select>
                <label for="year_released">Year</label>
                @error('year_released')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-info" wire:click="addAnime()">
                    Add Anime
                </button>
            </div>
        </div>
    </div>
</div>

@else
@endrole