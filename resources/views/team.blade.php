@extends('tema.master')

@section('title')
Samsan Tech
@endsection

@section('content')
<h1 class="display-4 text-center text-info">Team</h1>
<div class="card-deck text-info">
    <div class="card mb-5">
        <img src="{{asset('/img/18.jpg')}}" class="card-img-top">
        <div class="card-body">
            <h3 class="card-title">Asnur Karima</h3>
            <p class="card-text lead">082353256126</p>
        </div>
    </div>
    <div class="card mb-5">
        <img src="{{asset('/img/20.jpg')}}" class="card-img-top" height="350">
        <div class="card-body">
            <h3 class="card-title">Aufa Rezky Alghifari</h3>
            <p class="card-text lead">082353256122</p>
        </div>
    </div>
    <div class="card mb-5">
        <img src="{{asset('/img/21.jpg')}}" class="card-img-top" height="350">
        <div class="card-body">
            <h3 class="card-title">Abid Hamidzan</h3>
            <p class="card-text lead">082353256123</p>
        </div>
    </div>
</div>
@endsection