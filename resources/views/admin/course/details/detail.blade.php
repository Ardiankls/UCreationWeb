@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 ">
                <div class="col-fluid bg-white mx-auto p-5 shadow" style="border-radius: 15px; background-image: linear-gradient(to right top, #e1b6ff, #d4b2ff, #c5aeff, #b5aaff, #a4a7ff, #969fff, #8697ff, #748fff, #6480ff, #5470ff, #4460ff, #364eff);">
                    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold " style="color: white">Course</h1>
                    <h1 class="title mx-auto text-center p-1 fs-1 font-weight-bold"
                        style="color: white; ">{{$course->lecturer->courses->name}}</h1>
                </div>
            </div>
            <div class="col-6  ">
                <div class="col-fluid bg-white mx-auto shadow p-5" style="border-radius: 15px; background-image: linear-gradient(to right top, #e1b6ff, #d4b2ff, #c5aeff, #b5aaff, #a4a7ff, #969fff, #8697ff, #748fff, #6480ff, #5470ff, #4460ff, #364eff);" >
                    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: white">Period:</h1>
                    <p class="proj-shortdesc mx-auto text-center     p-2 fs-6"
                       style="color: white"> {{$course->lecturer->years->year}}</p>
                    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: white">Lecturer:</h1>
                    <div class="col-6 d-flex text-center ">
                    @foreach($lecturers as $lecturer)

                        <p class="proj-shortdesc  mx-auto text-center p-2 fs-4" style="color: white"> {{$lecturer->teach->name }}</p>

                    @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                @include('admin.course.details.creation_list')
            </div>
        </div>
    </div>
@endsection
