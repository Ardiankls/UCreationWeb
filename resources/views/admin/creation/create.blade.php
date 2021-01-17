@extends('layouts.app')
@section('content')
    <body>
    <form action="{{ route('admin.creation.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container" style="padding: 20px 55px;">
            <h1>Creation Information</h1>
            <div class="form-group"><label>Name</label>
                <input class="form-control" type="text" name="name_creation" required></div>
            <div class="form-group"><label>Date Created</label>
                <input class="form-control" type="date" name="date_created" required>
            </div>
            <div class="form-group"><label>Courses</label>
                <select name="course_name" class="custom-select">
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}" required>
                                                {{ $course->courses->name }} </option>
                                        @endforeach
                </select>
            </div>

            {{--            <div class="form-group"><label>Gender</label>--}}
            {{--                <select class="form-control" name="gender_idol" ><optgroup label="Choose Gender" type="text"  required>--}}
            {{--                        <option value="Male"  selected="">Male</option><option value="Female">Female</option></optgroup></select></div>--}}

            <div class="form-group"><label>Short Description</label>
                <input class="form-control" type="text" name="short_desc" required></div>
            <div class="form-group"><label>Long Description</label>
                <input class="form-control" type="text" name="long_desc" required></div>
            <div class="form-group">
                <label for="picture">Upload Picture </label>
                <input type="file" class="form-control-file" name="picture">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dynamic_field"> Creator's Team
                    <tr>
                        <td><select name="creator_team" class="custom-select">
                                @foreach ($students as $user)
                                    <option value="{{ $user->id }}" required>
                                        {{ $user->name }} </option>
                                @endforeach
                            </select></td>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                    </tr>
                </table>
                {{--                        <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />--}}
            </div>
{{--            <div class="form-group"><label>Creator/ Team</label>--}}
{{--                <select name="creator_team" class="custom-select">--}}
{{--                    @foreach ($students as $user)--}}
{{--                        <option value="{{ $user->id }}" required>--}}
{{--                            {{ $user->name }} </option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
            <button
                class="btn btn-primary" type="submit" style="background-color: rgb(221,177,226);">Submit
            </button>
        </div>

    </form>
    </body>
@endsection
