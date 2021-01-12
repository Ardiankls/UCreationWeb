<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\course_year_lecturer;
use App\Models\Creation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use League\Event\Event;

class CreationController extends Controller
{
    public function index()
    {
        //
        $pages = 'admin';
        $creation = creation::all();

        return view('admin.index', compact('creation','pages'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $courses = course_year_lecturer::all();
        $students = User::where('role_id', '=', 1)
            ->get();
        return view('admin.creation.create', compact('courses', 'students'));

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

//        $course = course_year_lecturer::all();

        //ini buat nge store image
        $request->validate([
            'photo' => 'image|mimes:png,jpg,jpeg,svg',
        ]);
        $imgName = $request->picture->getClientOriginalName().'-'.time().'.'.$request->picture->extension();
        $request->picture->move(public_path('/image/creation'), $imgName);


        $creation = Creation::create([
            'name' => $request['name_creation'],
            'date'=>$request['date_created'],
            'course'=>$request['course_name'],
            'short_description'=>$request['short_desc'],
            'long_description'=>$request['long_desc'],
            'picture'=>$imgName,
            'created_by'=>Auth::id(),
            'creator_team'=>$request['creator_team'],
            'ucr_course_year_lecturer_id'=>$request['course_name'],
         ]);
        return redirect()->route('admin.creation.index');




//        $cy = Course_year::create([
//            'ucr_year_id' => $request['course_period'],
//            'ucr_course_id' => $course->id,
//        ]);
////
//        $cyl = Course_year_lecturer::create([
//            'ucr_course_year_id' => $cy->id,
//            'ucr_user_id' => $request['course_lecturer'],
//        ]);

//        return redirect()->route('student.creation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Creation  $creation
     * @return Response
     */
    public function show(Creation $creation)
    {
        //buat nge show detail Project
        $pages = 'creation';
        $students = User::where('role_id', '=', 1)
            ->get();
//        $user = User::all();
        return view('admin.creation.detail', compact('pages', 'creation', 'students'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Creation  $creation
     * @return Response
     */
    public function edit(Creation $creation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Creation  $creation
     * @return Response
     */
    public function update(Request $request, Creation $creation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creation  $creation
     * @return Response
     */
    public function destroy(Creation $creation)
    {
        //
    }
}
