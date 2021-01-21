@extends('layouts.app')
@section('content')
    <body>
    <form action="{{ route('admin.course.store') }}" method="post">
        @csrf
        <div class="container" style="padding: 20px 55px;">
            <h1>Course Information</h1>
            <div class="form-group"><label>Course Name</label>
                <input class="form-control" type="text" name="name_course" required></div>
            <div class="form-group"><label>Department</label>
                <select name="course_department" class="custom-select">
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}" required>
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
{{--                <select name="course_lecturer" class="custom-select">--}}
{{--                                        @foreach ($lecturers as $user)--}}
{{--                                            <option value="{{ $user->id }}" required>--}}
{{--                                                {{ $user->name }} </option>--}}
{{--                                        @endforeach--}}
{{--                </select>--}}

{{--                Ini buat type hidden karena buat nampung value dari javascript--}}
                <div class="form-group">
                    <input class="form-control" type="hidden" name="count" VALUE="" id="count"></div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_field">
                        <tr>
                            <td><select name="course_lecturer1" class="custom-select">
                                    @foreach ($lecturers as $user)
                                        <option value="{{ $user->id }}" required>
                                            {{ $user->name }} </option>
                                    @endforeach
                                </select></td>
                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                        </tr>
                    </table>
                    {{--                        <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />--}}
                </div>
            </div>


            {{--                        <div class="form-group"><label>Gender</label>--}}
{{--                            <select class="form-control" name="gender_idol" ><optgroup label="Choose Gender" type="text"  required>--}}
{{--                                    <option value="Male"  selected="">Male</option><option value="Female">Female</option></optgroup></select></div>--}}


            <button
                class="btn btn-primary" type="submit" style="background-color: rgb(221,177,226);">Submit
            </button>
        </div>

    </form>
    </body>
    <script>
        $(document).ready(function(){
            var i=1;
            $('#add').click(function(){
                i++;
                document.getElementById('count').value = i;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="course_lecturer'+i+'" class="custom-select">\n' +
                    '                                        @foreach ($lecturers as $user)\n' +
                    '                                            <option value="{{ $user->id }}" required>\n' +
                    '                                                {{ $user->name }} </option>\n' +
                    '                                        @endforeach\n' +
                    '                                    </select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

        });
    </script>
@endsection
