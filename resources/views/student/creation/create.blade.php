@extends('layouts.app')
@section('content')
    <body>
    <form action="{{ route('creation.store') }}" method="post">
        @csrf
        <div class="container" style="padding: 20px 55px;">
            <h1>Creation Information</h1>
            <div class="form-group"><label>Name</label>
                <input class="form-control" type="text" name="name_creation" required></div>
            <div class="form-group"><label>Date Created</label>
                <input class="form-control" type="date" name="date_created" required>
            </div>
            <div class="form-group"><label>Department</label>
                <select name="department_name" class="custom-select">
                    {{--                    @foreach ($agencies as $agency)--}}
                    {{--                        <option value="{{ $agency->id }}" required>--}}
                    {{--                            {{ $agency->name_agency }} </option>--}}
                    {{--                    @endforeach--}}
                </select>
            </div>

            {{--            <div class="form-group"><label>Gender</label>--}}
            {{--                <select class="form-control" name="gender_idol" ><optgroup label="Choose Gender" type="text"  required>--}}
            {{--                        <option value="Male"  selected="">Male</option><option value="Female">Female</option></optgroup></select></div>--}}

            <div class="form-group"><label>Short Description</label>
                <input class="form-control" type="text" name="short_desc" required></div>
            <div class="form-group"><label>Long Description</label>
                <input class="form-control" type="text" name="long_desc" required></div>

            <div class="form-group"><label>Creator/ Team</label>
                <select name="creator_team" class="custom-select">
                    {{--                    @foreach ($agencies as $agency)--}}
                    {{--                        <option value="{{ $agency->id }}" required>--}}
                    {{--                            {{ $agency->name_agency }} </option>--}}
                    {{--                    @endforeach--}}
                </select>
            </div>
            <button
                class="btn btn-primary" type="submit" style="background-color: rgb(221,177,226);">Submit
            </button>
        </div>

    </form>
    </body>
@endsection