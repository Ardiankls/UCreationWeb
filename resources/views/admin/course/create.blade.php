@extends('layouts.app')
@section('content')
    <body>
    <form action="{{ route('admin.course.store') }}" method="post">
        @csrf
        <div class="container" style="padding: 20px 55px;">
            <h1>Creation Information</h1>
            <div class="form-group"><label>Course Name</label>
                <input class="form-control" type="text" name="name_course" required></div>
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


            <button
                class="btn btn-primary" type="submit" style="background-color: rgb(221,177,226);">Submit
            </button>
        </div>

    </form>
    </body>
@endsection
