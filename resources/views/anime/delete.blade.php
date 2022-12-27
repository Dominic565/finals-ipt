@extends('base')

@extends('navbar')
<body style="background-color">
</body>
@section('title', 'Delete')

@section('content')

<div class="go m-5">
        <div class="col-sm-5 offset-sm-4">
            <div>
                <livewire:anime.delete :animesId="$id"/>
            </div>
        </div>
    </div>
</div>

@endsection
