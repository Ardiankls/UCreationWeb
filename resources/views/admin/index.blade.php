@extends('layouts.app')
@section('content')
    <div class="container " >
        <div class="row ">
            <div class="sort mt-5" style="color: #979BFF" >
                <div class="dropdown">
{{--                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Sort By--}}
{{--                    </a>--}}

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="row  d-flex ">
                @foreach($creation as $creation)
                    <div class="col-lg-3">
                        @csrf
                     <a class="" href="{{ route('admin.creation.show', $creation->id) }}">
                <div class="card-view bg-white shadow "  style="width: 200px; height: 267px; margin-top: 50px; border-radius: 15px;">
                    <img src="{{asset('image/creation/'.$creation->picture)}}" class="card-img-top" style="padding: 2px ;margin: 0 auto; height: 155px; margin-top: 10px; border-radius: 15px;">
                    <h1 class="title mx-auto text-center p-1 fs-5 font-weight-bold" style="color: #979BFF">{{$creation->name}}</h1>
                    <p class="proj-shortdesc mx-auto text-center     p-2 fs-6" style="color: #979BFF"> {{$creation->short_description}}</p>
                </div>
                </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


{{--            <nav aria-label="Page navigation example" style="color: #979BFF">--}}
{{--                <ul class="pagination justify-content-center mt-3" >--}}
{{--                    <li class="page-item disabled">--}}
{{--                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#">Next</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
