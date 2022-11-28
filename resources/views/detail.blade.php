@extends('layout')

@section('title', 'Detail')

@section('content')

  <div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
        <div class="col-lg-6">
            <h1 style="font-size: 2.5rem;" class="display-4 mb-3 animated slideInDown">{{ $details->title }}</h1>
                <h5> by {{ $details->author }}</h5>
                <p> Published by : {{ $details->publishers->name }} <br> Year : {{ $details->year }} <br> Sysnopis : {{ $details->synopsis }}</p>
            </div>
            <div class="col-lg-6 animated fadeIn detail">
                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width:350px; margin-left: 125px" src="{{ $details->image }}"alt="">
            </div>
        </div>
    </div>
</div>

@endsection
