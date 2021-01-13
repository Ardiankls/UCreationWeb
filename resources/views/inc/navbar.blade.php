{{--@auth()--}}
{{--<ul class="navbar-nav mr-auto @if($pages == 'guest') active @endif ">--}}
{{--    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em  ">--}}
{{--        <a class="nav-link active" aria-current="page" href="#" style="color: white; ">Project List</a>--}}
{{--    </li>--}}
{{--    <li class="nav-item btn   " style="background-color: #7965FF; margin-right: 1em ">--}}
{{--        <a class="nav-link"  style="color: white;" href="#">About</a>--}}
{{--    </li>--}}

{{--</ul>--}}
{{--@endauth--}}
@auth()
@if(Auth()->user()->isAdmin())
<ul class="navbar-nav mr-auto  ">
    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em  ">
        <a class="nav-link active" aria-current="page" href="{{ route('admin.creation.index') }}" style="color: white; ">Project List</a>
    </li>
    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link " style="color: white;" href="{{ route('admin.creation.create') }}">Upload Project</a>
    </li>
    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link " style="color: white;" href="{{ route('admin.course.create') }}">Add Course</a>
    </li>
    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link " style="color: white;" href="{{ route('admin.course.index') }}">Course List</a>
    </li>
    <li class="nav-item btn   " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link"  style="color: white;" href="#">About</a>
    </li>

</ul>
@endif

@if(Auth()->user()->isLecturer())
<ul class="navbar-nav mr-auto  ">
    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em  ">
        <a class="nav-link active" aria-current="page" href="{{ route('lecturer.creation.index') }}" style="color: white; ">Project List</a>
    </li>

    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link " style="color: white;" href="{{ route('lecturer.course.index') }}">Course List</a>
    </li>

    <li class="nav-item btn   " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link"  style="color: white;" href="#">About</a>
    </li>

</ul>
@endif

@if(Auth()->user()->isStaff())
    <ul class="navbar-nav mr-auto  ">
        <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em  ">
            <a class="nav-link active" aria-current="page" href="{{ route('staff.creation.index') }}" style="color: white; ">Project List</a>
        </li>

        <li class="nav-item btn   " style="background-color: #7965FF; margin-right: 1em ">
            <a class="nav-link"  style="color: white;" href="#">About</a>
        </li>

    </ul>
@endif

@if(Auth()->user()->isStudent())
    <ul class="navbar-nav mr-auto  ">
        <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em  ">
            <a class="nav-link active" aria-current="page" href="{{ route('student.creation.index') }}" style="color: white; ">Project List</a>
        </li>

        <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em ">
            <a class="nav-link " style="color: white;" href="{{ route('student.creation.create') }}">Upload Project</a>
        </li>

        <li class="nav-item btn   " style="background-color: #7965FF; margin-right: 1em ">
            <a class="nav-link"  style="color: white;" href="#">About</a>
        </li>

    </ul>
@endif
@endauth
{{--@endauth--}}

{{--@auth()--}}
{{--<ul class="navbar-nav mr-auto  @if  ($pages  =='student')active @endif">--}}
{{--    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em  ">--}}
{{--        <a class="nav-link active" aria-current="page" href="#" style="color: white; ">Project List</a>--}}
{{--    </li>--}}

{{--    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em ">--}}
{{--        <a class="nav-link " style="color: white;" href="{{ route('admin.course.create') }}">Upload Project</a>--}}
{{--    </li>--}}

{{--    <li class="nav-item btn   " style="background-color: #7965FF; margin-right: 1em ">--}}
{{--        <a class="nav-link"  style="color: white;" href="#">About</a>--}}
{{--    </li>--}}

{{--</ul>--}}

{{--@endauth--}}
