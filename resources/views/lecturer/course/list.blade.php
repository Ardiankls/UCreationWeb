@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Courses List</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Year</th>
                    <th scope="col">lecturers</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>

                        <td>{{ $course->id}}</td>

                        <td>{{ $course->lecturer->courses->name }}</td>
                        <td></td>
                        <td>{{ $course->lecturer->years->year }}</td>
                        <td>{{ $course->teach->name }}</td>
                        @auth
                            <td class="d-flex">
                                <form action="{{ route('lecturer.course.edit', $course) }}">
                                    @csrf

                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                                <form action="{{ route('lecturer.course.destroy', $course) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endauth

                        <td>

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
