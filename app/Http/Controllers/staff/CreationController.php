<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use App\Models\Creation;
use App\Models\Creation_user;
use App\Models\User;
use Illuminate\Http\Request;

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
        $pages = 'staff';
        $creation = creation::all();
        return view('staff.index', compact('creation','pages'));
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
        return view('staff.creation.detail', compact('pages', 'creation', 'creators'));
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
