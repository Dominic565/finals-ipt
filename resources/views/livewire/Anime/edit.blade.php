
<div class="seiyu">
        <div class="card border border-light">
            <div class="card-header" style="background-image: url('images/joker.jpg')">
                <h3 class="text-center mt-2">Edit Anime</h3>
            </div>
            <div class="card-body shadow">
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
                    <input type="text" class="form-control" wire:model.defer="episode">
                    <label for="episode">Episode</label>
                    @error('episode')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.debounce.500ms="year_released">
                    <label for="year_released">Year Released</label>
                    @error('year_released')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
             
               
                <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" wire:click="editAnime()">
                        Save Changes
                    </button>
                    <button class="btn btn-info mx-2" wire:click="back()">
                        back
                    </button>
                </div>
            </div>
        </div>
</div>
<style>
    #seiyu{
        background-image: url('images/joker.jpg')
    }
</style>