@extends('layout')

@section('title','Publisher')

@section('content')

@foreach ($publisher as $publishers)

{{-- <div class="containerBook">
    <div class="PublisherList">
        <img style="width: 500px"src="{{$publishers->image}}" alt="">
    </div> --}}

    {{-- <div class="text-center" style="margin-top: 1rem; background-color:rgba(0, 0, 0, 0.1)">
        <div style="color: black; padding: 1rem">
            <h5>{{$publishers->name}}</h5>
            <p> Address - {{$publishers->address}}</p>
            <p> Phone - {{$publishers->phone}}</p>
            <p> Email - {{$publishers->email}}</p>
        </div>
    </div> --}}

    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 style="font-size: 2.5rem;" class="display-4 mb-3 animated slideInDown">{{$publishers->name}}</h1>
                    <p> Address - {{$publishers->address}}</p>
                    <p> Phone - {{$publishers->phone}}</p>
                    <p> Email - {{$publishers->email}}</p>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width:200px; margin-left: 400px" src="{{$publishers->image}}"alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="HomePageBookList">

        @foreach ($publishers->book as $booklist)
        <div class="card" style="width: 13rem;">
            <img src="{{ $booklist->image }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $booklist->title }}</h5>
            <p class="card-text"><p>by</p>{{ $booklist->author }}</p>
            <a href="/detail{{ $booklist->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endforeach

@endsection
