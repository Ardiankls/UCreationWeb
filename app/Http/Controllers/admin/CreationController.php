<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course_year;
use App\Models\course_year_lecturer;
use App\Models\Creation;
use App\Models\Creation_student;
use App\Models\Creation_user;
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
        $creation = creation::where('status', '1')->get();

        return view('admin.index', compact('creation', 'pages'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $pages = 'creation';
        $courses = Course_year::all();
        $students = User::where('role_id', '=', 1)
            ->get();
        return view('admin.creation.create', compact('courses', 'students', 'pages'));

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request )
    {

//        $course = course_year_lecturer::all();

        //ini buat nge store image
        $request->validate([
            'photo' => 'image|mimes:png,jpg,jpeg,svg',
        ]);
        $imgName = $request->picture->getClientOriginalName() . '-' . time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/image/creation'), $imgName);


        $creation = Creation::create([
            'name' => $request['name_creation'],
            'date' => $request['date_created'],
            'course' => $request['course_name'],
            'short_description' => $request['short_desc'],
            'long_description' => $request['long_desc'],
            'picture' => $imgName,
//            'created_by' => Auth::id(),
//            'creator_team' => $request['creator_team'],
            'ucr_course_year_id' => $request['course_name'],
        ]);

        $cu = Creation_user::create([
            'ucr_creation_id' => $creation->id,
            'ucr_user_id' => Auth::id(),
        ]);
        for ($i = 1; $i <= $request['count']; $i++) {
            $cu = Creation_user::create([
                'ucr_creation_id' => $creation->id,
                'ucr_user_id' => $request['creator_team' . $i],
            ]);

        }

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
     * @param \App\Models\Creation $creation
     * @return Response
     */
    public function show($id)
    {
        //buat nge show detail Project
        $pages = 'creation';

        //another way
//        $creations = Creation::all();
//        foreach($creations as $creation)
        $creation = Creation::findOrFail($id);
        $creators = Creation_user::where('ucr_creation_id',$id)->get();

//        $creators = User::where('id',$creatoruser)->get();
//                dd($creators);
//        $creators = Creation::where('created_by', $creation->id);

//        $creatoruser = User::where('id','=',$creators)->get();
//        $creatoruser = User::whereHas('creates', function ($querry) use ($creators) {
//            $querry->whereIn('id', $creators)->get();
//        });
        return view('admin.creation.detail', compact('pages', 'creation', 'creators'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Creation $creation
     * @return Response
     */
    public function edit(Creation $creation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Creation $creation
     * @return Response
     */
    public function update(Request $request, Creation $creation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Creation $creation
     * @return Response
     */
    public function destroy(Creation $creation)
    {
        //
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
