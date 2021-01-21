<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Creation;
use App\Models\Creation_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = 'student';
        $creation = creation::all();

        return view('student.index', compact('creation','pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'student';
        return view('student.creation.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ini buat nge store image ke db
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


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //buat ngeshow project ke detail Project
        $pages = 'creation';


        $creation = Creation::findOrFail($id);
        $creators = Creation_user::where('ucr_creation_id',$id)->get();


        return view('student.creation.detail', compact('pages', 'creation', 'creators'));
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
