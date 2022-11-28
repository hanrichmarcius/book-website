@extends('layout')

@section('title', 'Home')

@section('content')

<div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
        <div class="col-lg-6">
            <h1 style="font-size: 2.5rem;" class="display-4 mb-3 animated slideInDown">Giant Book Supplier, <br> Best Book Store and Supplier in Indonesia</h1>
            </div>
            <div class="col-lg-6 animated fadeIn">
                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width:350px; margin-left: 125px" src="https://www.pngkey.com/png/full/22-222310_open-book-vector-book.png"alt="">
            </div>
        </div>
    </div>
</div>

<div class="containerBook" style="background-color: #F2F8FE">
    <div class="BookList">
        <h1 style=" margin-top: 17px">Book List</h1>
    </div>

    <div class="HomePageBookList">

    @foreach ($book as $booklist)
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


@endsection
