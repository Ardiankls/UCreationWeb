@extends('layouts.app')
@section('content')

    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">Course:</h1>
    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">{{$course->lecturer->courses->name}}</h1>
    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">Period:</h1>
    <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$course->lecturer->years->year}}</p>
    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">Lecturer:</h1>
    <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$course->teach->name }}</p>

    @include('admin.course.details.creation_list')

@endsection
