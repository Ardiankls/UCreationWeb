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
            <div class="col-sm-11  shadow p-5 m-5 rounded-3" style="background-color: white; color: #979BFF">
                <div class="row">
                    <div class="col-sm-5" style="">

                        {{--                    <img  class=" shadow rounded-3 "  src="img/blankprofile.png" style="width: 4em; height: 4em; margin-top: -4em; margin-right: 1em" >--}}
                    </div>
                    <div class="col-sm-7" style="color: #979BFF">
                        {{--                        <p>Name</p>--}}
                        {{--                        <p>NIM</p>--}}
                        {{--                        <p>Department</p>--}}
                        {{--                        <p>Batch</p>--}}
                        


                    </div>
                </div>
            </div>
        </div>

        <div class="container " >
            <div class="row ">


@endsection
