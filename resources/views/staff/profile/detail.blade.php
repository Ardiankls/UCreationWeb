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
            <div class="col-sm-6  shadow p-5 m-5 rounded-3 mx-auto " style="margin-left: 10em;background-image: linear-gradient(to right top, #e1b6ff, #d4b2ff, #c5aeff, #b5aaff, #a4a7ff, #969fff, #8697ff, #748fff, #6480ff, #5470ff, #4460ff, #364eff);margin-top: 20em;">
                <div class="row">
                    <div class="col-sm-5" style="">

                                            <img  class=" shadow rounded-3"  src="img/blankprofile.png" style="width: 18em; height: 18em; margin-left: 20em" >
                    </div>
                    <div class="col-sm-4 text-center " style="color: white; position: center ;padding-top: 20em; margin-left: -5em">
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


@endsection
