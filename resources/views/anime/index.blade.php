@extends('base')

@extends('navbar')

@section('title', 'Anime')

@section('content')
    <div class="container">
        <div class="">
            <livewire:anime.index/>
        </div>
    </div>
    <style>
        .container{
            width: 1500px;
            background-color: white;
        }
    </style>

@endsection
