@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('admin.course.update', $course) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $course->name }}">
                </div>
                <div class="form-group"><label>Department</label>
                    <select name="course_department" class="custom-select">
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}" >
                                {{ $department->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group"><label>Period</label>
                    <select name="course_period" class="custom-select">
                        @foreach ($periods as $year)
                            <option value="{{ $year->id }}" required>
                                {{ $year->year }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group"><label>Lecturer</label>
                    <select name="course_lecturer" class="custom-select">
                        @foreach ($lecturers as $user)
                            <option value="{{ $user->id }}" required>
                                {{ $user->name }} </option>
                        @endforeach
                    </select>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="tanggal">Event Date:</label>--}}
{{--                    <input type="date" class="form-control" name="date" value="{{ $event->event_date }}">--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
    @endsection
