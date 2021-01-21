<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use App\Models\Creation;
use App\Models\Creation_user;
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

        $pages = 'lecturer';
        $creation = creation::all();

        return view('lecturer.index', compact('creation','pages'));
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
        //buat nge show detail Project
        $pages = 'creation';


        $creation = Creation::findOrFail($id);
        $creators = Creation_user::where('ucr_creation_id',$id)->get();
        return view('lecturer.creation.detail', compact('pages', 'creation', 'creators'));
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
