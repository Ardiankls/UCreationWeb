@auth
<ul class="navbar-nav mr-auto  @if  ($pages  =='admin')active @endif">
    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em  ">
        <a class="nav-link active" aria-current="page" href="#" style="color: white; ">Project List</a>
    </li>
    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link " style="color: white;" href="{{ route('admin.creation.create') }}">Upload Project</a>
    </li>
    <li class="nav-item btn  " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link " style="color: white;" href="{{ route('admin.course.create') }}">Add Course</a>
    </li>
    <li class="nav-item btn   " style="background-color: #7965FF; margin-right: 1em ">
        <a class="nav-link"  style="color: white;" href="#">About</a>
    </li>

</ul>
@endauth
