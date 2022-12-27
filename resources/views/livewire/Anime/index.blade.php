<div class="banshee">
    <div class="container">
        <div class="row">
            <div class="col">
                <select class="form-select" wire:model.lazy="year_released">
                <option value="all">All</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" wire:model.lazy="episode">
                <option value="all">All</option>
                <option value="24">24</option>
                <option value="100">100</option>
                <option value="300">300</option>
                <option value="500">500</option>
                <option value="600">600</option>
                <option value="1054">1054</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="search" wire:model.lazy="search">
            </div>
        </div>

    </div>
    <table class=" table table-striped shadow border border-light">
        <thead class="table table-striped bg-secondary">
            <tr>
                <th>Author</th>
                <th>Email</th>
                <th>Description</th>
                <th>Episode</th>
                <th>Year_Released</th>
                <th>Edit</th>
                <th>Delete</th>
           
            </tr>
        </thead>
        <tbody>
            @foreach ($animes as $anime)
                <tr >
                    <td>{{ $anime->author }}</td>
                    <td>{{ $anime->email }}</td>
                    <td>{{ $anime->description }}</td>
                    <td>{{ $anime->episode }}</td>
                    <td>{{ $anime->year_released }}</td>
                    <td>
                        <a href="{{ url('edit', ['anime' => $anime->id]) }}" class="btn btn-primary" id="ic" title="Edit"><i class=" ">Edit</i></a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['anime' => $anime->id]) }}" class="btn btn-danger" id="ic" title="Delete"><i class=" ">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$animes->links()}}
</div>

<style>
    
</style>
