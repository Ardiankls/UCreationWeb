<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Course_year;
use App\Models\course_year_lecturer;
use App\Models\Creation;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pages = 'course';
        $courses = course_year_lecturer::all();
        return view('student.course.index', compact('courses', 'pages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $pages = 'course';
//
//        $course =course_year_lecturer::findOrFail($id);
//        $creations = Creation::where('ucr_course_year_id',$id)->get();
//        $lecturers = course_year_lecturer::where('ucr_course_year_id',$id)->get();
//        return view('student.course.list', compact('pages', 'course', 'creations','lecturers'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
