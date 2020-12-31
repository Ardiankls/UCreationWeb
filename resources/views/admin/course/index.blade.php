@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Courses List</h1>
        </div>
        <div class="row">
            @auth
                <div class="col-md-2 offset-md-10">
                    <a href="{{ route('admin.course.create') }}" class="btn btn-primary btn-block" role="button"
                       aria-pressed="true">Add</a>
                </div>
            @endauth
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">lecturers</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>

                        <td>{{ $course->id}}</td>
                        <td>{{ $course->lecturer->courses->name }}</td>
                        <td>{{ $course->lecturer->years->year }}</td>
                        <td>{{ $course->teach->name }}</td>
{{--                        <td>{{ $event->status }}</td>--}}
{{--                        <td>{{ $event->creator->name }}</td>--}}

                        <td>
{{--                            <form action="{{ route('creator.event.show', $event) }}" method="get">--}}
{{--                                @csrf--}}
{{--                                <button type="submit" class="btn btn-primary">Detail</button>--}}
{{--                            </form>--}}
                        </td>
{{--                        @auth--}}
{{--                            <td>--}}
{{--                                <form action="{{ route('creator.event.destroy', $event) }}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="_method" value="DELETE">--}}
{{--                                    <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        @endauth--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
