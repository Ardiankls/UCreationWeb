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
                    </div>
                    <div class="col-sm-7" style="color: #979BFF">
                        <p>NIP     : {{\Illuminate\Support\Facades\Auth::user()->detailable->nip}}</p>
                        <p>Name    : {{\Illuminate\Support\Facades\Auth::user()->detailable->name}}</p>
                        <p>Email   :{{\Illuminate\Support\Facades\Auth::user()->detailable->email}}</p>
                        <p>Gender  :{{\Illuminate\Support\Facades\Auth::user()->detailable->gender}}</p>
                        <p>Phone   :{{\Illuminate\Support\Facades\Auth::user()->detailable->phone}}</p>
                        <p>Line :{{\Illuminate\Support\Facades\Auth::user()->detailable->line_account}}</p>
{{--                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->department}}</p>--}}
{{--                        <p>{{\Illuminate\Support\Facades\Auth::user()->detailable->title}}</p>--}}


                    </div>
                </div>
            </div>
        </div>

        <div class="container " >
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
        </div>
    </div>
@endsection
