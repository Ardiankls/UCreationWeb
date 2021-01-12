<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Course_year;
use App\Models\course_year_lecturer;
use App\Models\Creation;
use App\Models\department;
use App\Models\User;
use App\Models\year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = course_year_lecturer::all();
        $pages = 'course';
        return view('admin.course.index', compact('courses', 'pages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pages = 'course';
        $departments = department::all();
        $periods = year::all();
        $lecturers = User::where('role_id', '=', 2)
            ->get();
        return view('admin.course.create', compact('departments','periods', 'lecturers', 'pages'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pages = 'course';
        $course = Course::create([
            'name' => $request['name_course'],
            'date'=>'',
            ''
        ]);


        $cy = Course_year::create([
            'ucr_year_id' => $request['course_period'],
            'ucr_course_id' => $course->id,
        ]);
//
        $cyl = Course_year_lecturer::create([
            'ucr_course_year_id' => $cy->id,
            'ucr_user_id' => $request['course_lecturer'],
        ]);
//        $teach = Auth::Course_year_lecturer()->teaches()->syncWithoutDetaching($request->ucr_course_year_lecturer_id,['couse_year']);
//        $lect = Auth::Course_year_lecturer()->lect()->syncWithoutDetaching($request->ucr_course_year_lecturer_id,['couse_year']);
        return redirect()->route('admin.course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
        $course->update($request->all());
//        return redirect()->route('admin.course.update');
        return view('admin.course.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(course_year_lecturer $course)
    {
        //
        $course->delete();
        return redirect()->back();
    }
}
