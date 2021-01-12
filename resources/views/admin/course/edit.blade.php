@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ route('admin.course.update', $course) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="title" value="{{ $course->name }}">
                </div>
                <div class="form-group">
                    <label>Short Description:</label>
                    <textarea class="form-control" name="description">{{ $creation-> }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal">Event Date:</label>
                    <input type="date" class="form-control" name="event_date" value="{{ $event->event_date }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection
