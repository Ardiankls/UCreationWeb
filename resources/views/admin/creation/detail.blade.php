@extends('layouts.app')
@section('content')

    <div class="container-sm text-center">
        <img src="/image/creation/{{$creation->picture}}" class="img-fluid" style=" max-width: 50%; text-align:center; padding: 2px ;margin: 0 auto;  margin-top: 10px; border-radius: 15px;">
    </div>
    <div class="container-xl bg-white shadow-sm p-2 " style="border-radius: 15px; margin-top: 2%;">
        <h1 class="title mx-auto text-center p-1 fs-3 font-weight-bold" style=" color: #979BFF">{{$creation->name}}</h1>

        <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$creation->long_description}}</p>
    </div>

    <div class="container-sm bg-white p-2 shadow-sm mt-3" style="border-radius: 15px;">
        <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">Creators</h1>
        <div class="row d-flex ">

        @foreach($creators as $creator)
            <div class="col-sm-1 mx-auto">
            <p class="proj-shortdesc mx-auto text-center p-2 fs-6" style="color: #979BFF"> {{$creator->creators->name}}</p>
            </div>
        @endforeach

    <div>


@endsection

