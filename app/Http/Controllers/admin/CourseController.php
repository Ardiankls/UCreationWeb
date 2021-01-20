<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Course_year;
use App\Models\course_year_lecturer;
use App\Models\Creation;
use App\Models\department;
use App\Models\Lecturer;
use App\Models\User;
use App\Models\year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder;

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
        $pages = 'course';
//        $courses = course_year_lecturer::all();

        $courses = Course_year::all();
//        $lecturer = Course_year::all()->
//        $cyl = course_year_lecturer::all();
//        $cyl = course_year_lecturer::all();
//        $cyl = course_year_lecturer::all()->toArray();

//        nyoba pake collection :v
//        $courseall = $courses->map(function ($courses){
//            return collect($courses->toArray())
//                ->only()
//        });
//        $courseid = Course_year::id();
//
//        $posts = Post::whereHas('comments', function (Builder $query) {
//            $query->where('content', 'like', 'code%');
//        })->get();
//        $lecturer = course_year_lecturer::all();

//        $lecturers = course_year_lecturer::has('ucr_course_year_id','=',$courses)->get('id');

//        $lecturers= course_year_lecturer::whereHas('lecturer', function (Builder $query){
//            $query->where('ucr_course_year_lecturer_id','ucr_course_year_id');
//        })->get();

//        $lecturers= User::whereHas('teaches', function (Builder $query){
//            $query->whereHas('lecturer', function (Builder $query){
//                $query->where('');
//            });
//        })->get();
////        dd($);
//        $lecturers= User::where('id', function ($query)use($courses){
//            $query->select('ucr_user_id')->from('ucr_course_year_lecturer')->where('ucr_course_year_id', $courses);
//        });
//        dd($lecturers);
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
            'department_id' => $request['course_department'],
        ]);

        $cy = Course_year::create([
            'ucr_year_id' => $request['course_period'],
            'ucr_course_id' => $course->id,
        ]);
        for ($i = 1; $i <= $request['count'];$i++){

//
            $cyl = Course_year_lecturer::create([
                'ucr_course_year_id' => $cy->id,
                'ucr_user_id' => $request['course_lecturer'.$i],
            ]);
        }


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
        $pages = 'course';

        $course =course_year_lecturer::findOrFail($id);
        $creations = Creation::where('ucr_course_year_id',$id)->get();
        $lecturers = course_year_lecturer::where('ucr_course_year_id',$id)->get();

//        $creations = Course_year::whereHas('projects', function (Builder $query){
//            $query->where('ucr_creation_id','=')
//        })

//        $courses = Course_year::all()->except($id)->pluck('id');
//        $creationList = Creation::whereNotIn('id', function ($query)use($courses){
//            $query->select('creation_id')->from('ucr_creation');
//        })
//        ->where('role_id', 3)->get();
//        $courses =
        return view('admin.course.details.detail', compact('pages', 'course', 'creations','lecturers'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        $pages = 'course';


        return view('admin.course.edit', compact('pages', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update( course_year_lecturer $course)
    {
        //
        $course->update();
        $course->lecturer->update();
        $course->lecturer->courses->update();
//        $course->update($request->all());

//        return redirect()->route('admin.course.update');
        return redirect()->route('admin.course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();

        return redirect()->back();
    }
}
