@extends('tema.master')

@section('title')
Samsan Tech
@endsection

@section('content')
<h1 class="display-4 text-center text-info">Profile</h1>
<div class="card mb-3">
    <img src="{{asset('/img/profile.jpg')}}" class="card-img-top" height="350">
    <div class="card-body">
        <h5 class="card-title">Samsan Tech</h5>
        <p class="card-text">Samsan Tech berdiri pada tahun 2019. awal berdinya samsan tech hanya memiliki 3 karyawan, seiring berkembangnya samsan tech pada saat ini sudah memiliki 200 karyawan.</p>
    </div>
</div>
@endsection