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


            <div class="form-group"><label>Short Description</label>
                <input class="form-control" type="text" name="short_desc" required></div>
            <div class="form-group"><label>Long Description</label>
                <input class="form-control" type="text" name="long_desc" required></div>
            <div class="form-group">
                <label for="picture">Upload Picture </label>
                <input type="file" class="form-control-file" name="picture">
            </div>

            <div class="form-group">
                <input class="form-control" type="hidden" name="count" VALUE="" id="count"></div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dynamic_field"> Creator's Team
                    <tr>
                        <td><select name="creator_team1" class="custom-select">
                                @foreach ($students as $user)
                                    <option >  </option>
                                    <option value="{{ $user->id }}" required>
                                        {{ $user->name }} </option>
                                @endforeach
                            </select></td>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                    </tr>
                </table>
            </div>

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
                $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="creator_team'+i+'" class="custom-select">\n' +
                    '                                        @foreach ($students as $user)\n' +
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
