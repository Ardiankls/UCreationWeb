@extends('layouts.app')
@section('content')
    <style>
        div.scrollmenu {
            background-color: #333;
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }
    </style>
    <div class="container-fluid " >
        <div class="row">
            <div class="col-sm-4 shadow p-5 m-5 rounded-3" style="background-color: white; color: #979BFF;">
                <div class="row" style=" height: 100%">
                    <h1 class="text-center " style=" font-size: 8em">5</h1>
                    <h2 class="text-center mx-auto" style="">Total Project</h2>
                </div>
            </div>
            <div class="col-sm-6 shadow p-5 m-5 rounded-3" style="background-color: white; color: #979BFF">
                <div class="row">
                    <div class="col-sm-5" style="">
                        <picture >
                            <img src="img/blankprofile.png" class="img-fluid rounded-3 shadow-sm">
                        </picture>
                        {{--                    <img  class=" shadow rounded-3 "  src="img/blankprofile.png" style="width: 4em; height: 4em; margin-top: -4em; margin-right: 1em" >--}}
                    </div>
                    <div class="col-sm-7" style="color: #979BFF">
{{--                        <p>Name</p>--}}
{{--                        <p>NIM</p>--}}
{{--                        <p>Department</p>--}}
{{--                        <p>Batch</p>--}}
                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->nip}}</p>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->name}}</p>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->email}}</p>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->gender}}</p>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->phone}}</p>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->line_account}}</p>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->department->name}}</p>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->title->name}}</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="container " >
            <div class="row ">

{{--                <div class="row">--}}
{{--                    <div class="card-view bg-white shadow rounded-3 mx-auto" style="width: 200px; height: 267px; margin-top: 50px;">--}}
{{--                        <div class="image-cover rounded-3 mx-auto mt-3 " style="padding: 2px; background-color: lightpink; width: auto; height: 120px;"></div>--}}
{{--                        <h1 class="title mx-auto text-center p-2 fs-4" style="color: #979BFF">Project Title</h1>--}}
{{--                        <p class="proj-shortdesc mx-auto p-2 fs-6" style="color: #979BFF"> Short descripion about the project</p>--}}
{{--                        --}}{{--    <img class="rounded-3" src="img/noimage.jpg">--}}
{{--                    </div>--}}
{{--                    <div class="card-view bg-white shadow rounded-3 mx-auto" style="width: 200px; height: 267px; margin-top: 50px;">--}}
{{--                        <div class="image-cover rounded-3 mx-auto mt-3" style="padding: 2px; background-color: lightpink; width: auto; height: 120px;"></div>--}}
{{--                        <h1 class="title mx-auto text-center p-2 fs-4" style="color: #979BFF">Project Title</h1>--}}
{{--                        <p class="proj-shortdesc mx-auto p-2 fs-6" style="color: #979BFF"> Short descripion about the project</p>--}}
{{--                        --}}{{--    <img class="rounded-3" src="img/noimage.jpg">--}}
{{--                    </div>--}}
{{--                    <div class="card-view bg-white shadow rounded-3 mx-auto" style="width: 200px; height: 267px; margin-top: 50px;">--}}
{{--                        <div class="image-cover rounded-3 mx-auto mt-3" style="padding: 2px; background-color: lightpink; width: auto; height: 120px;"></div>--}}
{{--                        <h1 class="title mx-auto text-center p-2 fs-4" style="color: #979BFF">Project Title</h1>--}}
{{--                        <p class="proj-shortdesc mx-auto p-2 fs-6" style="color: #979BFF"> Short descripion about the project</p>--}}
{{--                        --}}{{--    <img class="rounded-3" src="img/noimage.jpg">--}}
{{--                    </div>--}}
{{--                    <div class="card-view bg-white shadow rounded-3 mx-auto" style="width: 200px; height: 267px; margin-top: 50px;">--}}
{{--                        <div class="image-cover rounded-3 mx-auto mt-3" style="padding: 2px; background-color: lightpink; width: auto; height: 120px;"></div>--}}
{{--                        <h1 class="title mx-auto text-center p-2 fs-4" style="color: #979BFF">Project Title</h1>--}}
{{--                        <p class="proj-shortdesc mx-auto p-2 fs-6" style="color: #979BFF"> Short descripion about the project</p>--}}
{{--                        --}}{{--    <img class="rounded-3" src="img/noimage.jpg">--}}
{{--                    </div>--}}
{{--                    <div class="card-view bg-white shadow rounded-3 mx-auto" style="width: 200px; height: 267px; margin-top: 50px;">--}}
{{--                        <div class="image-cover rounded-3 mx-auto mt-3" style="padding: 2px; background-color: lightpink; width: auto; height: 120px;"></div>--}}
{{--                        <h1 class="title mx-auto text-center p-2 fs-4" style="color: #979BFF">Project Title</h1>--}}
{{--                        <p class="proj-shortdesc mx-auto p-2 fs-6" style="color: #979BFF"> Short descripion about the project</p>--}}
{{--                        --}}{{--    <img class="rounded-3" src="img/noimage.jpg">--}}
{{--                    </div>--}}

{{--                </div>--}}

                @foreach($creations as $creation)
                    <div class="col-lg-3">
                        @csrf
                        <a class="" href="{{ route('admin.creation.show', $creation->id) }}">
                            <div class="card-view bg-white shadow "  style="width: 200px; height: 267px; margin-top: 50px; border-radius: 15px;">
                                <img src="{{asset('image/creation/'.$creation->picture)}}" class="card-img-top" style="padding: 2px ;margin: 0 auto; height: 155px; margin-top: 10px; border-radius: 15px;">
                                <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">{{$creation->name}}</h1>
{{--                                <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$creation->status}}</p>--}}
                                @if($creation->status == 0) <p class="proj-shortdesc mx-auto text-center p-2 fs-6 text-warning">Pending</p>
                                @elseif($creation->status == 1) <p class="proj-shortdesc mx-auto text-center p-2 fs-6 text-success">Approved</p>
                                @else <p class="proj-shortdesc mx-auto text-center p-2 fs-6 text-danger">Rejected</p> @endif
                            </div>
                        </a>
                    </div>
                @endforeach
                <nav aria-label="Page navigation example" style="color: #979BFF">
                    <ul class="pagination justify-content-center mt-3" >
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
            {{--    <div class="row">--}}
            {{--        <div class="scrollmenu">--}}
            {{--            <a href="#home">Home</a>--}}
            {{--            <a href="#news">News</a>--}}
            {{--            <a href="#contact">Contact</a>--}}
            {{--            <a href="#about">About</a>--}}
            {{--            <a href="#support">Support</a>--}}
            {{--            <a href="#blog">Blog</a>--}}
            {{--            <a href="#tools">Tools</a>--}}
            {{--            <a href="#base">Base</a>--}}
            {{--            <a href="#custom">Custom</a>--}}
            {{--            <a href="#more">More</a>--}}
            {{--            <a href="#logo">Logo</a>--}}
            {{--            <a href="#friends">Friends</a>--}}
            {{--            <a href="#partners">Partners</a>--}}
            {{--            <a href="#people">People</a>--}}
            {{--            <a href="#work">Work</a>--}}
            {{--        </div>--}}

        </div>
        {{--    <row>--}}
        {{--        <div class="col-sm-4  shadow p-5 m-5 rounded-3" style="background-color: white; color: #979BFF" >--}}

        {{--        </div>--}}
        {{--        <div class="col-sm-6 shadow p-5 m-5 rounded-3" style="background-color: white; color: #979BFF" >--}}
        {{--            <div class=" col-2 p-5 " style="background-color: greenyellow">--}}
        {{--                <img  class=" shadow rounded-3 "  src="img/blankprofile.png" style="width: 4em; height: 4em; margin-top: -4em; margin-right: 1em" >--}}
        {{--            </div>--}}
        {{--            <div class=" p-5  "  style="background-color: yellow">--}}
        {{--                <p>Username</p>--}}

        {{--                <p>NIM</p>--}}

        {{--                <p>major</p>--}}
        {{--                <p>Place & Birthdate</p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </row>--}}
    </div>
@endsection
