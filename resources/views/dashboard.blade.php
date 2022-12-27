@extends('base')

@extends('navbar')

@section('title', 'Dashboard',)

@section('content')
    <div class="container m-3">
        @role('user')
        <h1>Dashboard</h1>
        <div class="card offset-sm-2  mt-5">
            <div class="card-header">
                <img class="img-responsive center-block d-block mx-auto rounded-circle" src="images/logo.png" alt="logo">
            </div>
        @else
        @endrole
            <div class="row d-flex align-item-center justify-content-center">
                <div class="">
                    <livewire:anime.create/>    
                </div>
                
            </div>
            
        </div>
    </div>
    <style>
        h1{
           color: white;
            text-align: center;
        }
        .card{
            opacity: .9;
        }
       body{
       
        border-image-width: 50%;
       }
    </style>

@endsection
