<?php

namespace App\Http\Controllers\lecturer;

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

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course_year_lecturer::where('ucr_user_id', Auth::id())->get();
//        dd($courses);
        $pages = 'course';
        return view('lecturer.course.list', compact('courses', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $pages = 'course';

        $course = course_year_lecturer::findOrFail($id);
        $creations = Creation::where('ucr_course_year_id',$id)->get();
        $lecturers = course_year_lecturer::where('ucr_user_id',Auth::id())->get();
        return view('lecturer.course.details.detail', compact('pages', 'course', 'creations','lecturers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(course_year_lecturer $course)
    {
    }
    public function approve($id)
    {
        $creation = Creation::findOrFail($id);
        $creation->update(['status' => '1']);

        return empty($creation) ? redirect()->back()->with("Fail failed to approve") : redirect()->back();
    }

    public function reject($id)
    {
        $creation = Creation::findOrFail($id);
        $creation->update(['status' => '2']);

        return empty($creation) ? redirect()->back()->with("Fail failed to approve") : redirect()->back()->with('Creation Rejected Successfully');
    }
}
