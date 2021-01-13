@extends('layouts.app')
@section('content')

    <img src="/image/creation/{{$creation->picture}}" class="card-img-top" style="padding: 2px ;margin: 0 auto;  margin-top: 10px; border-radius: 15px;">

    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">{{$creation->name}}</h1>
    <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$creation->short_description}}</p>
    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">Description</h1>
    <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$creation->long_description}}</p>
    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">Description</h1>
    <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$creation->name}}</p>

    @foreach($students as $student)
    <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$student->name}}</p>
    @endforeach

@endsection

