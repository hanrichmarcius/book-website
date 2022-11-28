@extends('layout')

@section('title', 'Category')

@section('content')

<div class="containerCategories">

    {{-- <div class="CategoriesList">
        <h1>{{ $categorysearch->name }}</h1>
    </div> --}}

    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="col-lg-6 categorytitle">
                <h1 style="font-size: 2.5rem;" class="display-4 mb-3 animated slideInDown">{{ $categorysearch->name }}</h1>
            </div>
            {{-- <div class="row g-5 align-items-center">
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width:200px; margin-left: 400px" src="{{$publishers->image}}"alt="">
                </div>
            </div> --}}
        </div>
    </div>

    <div class="CategoriesBookList">

        @foreach ($categorysearch->book as $booklist)
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
