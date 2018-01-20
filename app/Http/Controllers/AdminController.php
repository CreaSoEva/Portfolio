<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Study;
use App\Models\Information;
use App\Models\Project;
use App\Models\Contact;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function adminstudies() 
    {
        $studies = Study::all();        
        return view('adminstudies' , compact('studies'));
    }

    public function adminskills() 
    {
        $skills = Skill::all();
        return view('adminskills' , compact('skills'));
    }

    public function admininformations()
    {
        $informations = Information::all();
        return view('admininformations' , compact('informations'));
    }

    public function admincontact()
    {
        $contacts = Contact::all();
        return view('admincontact' , compact('contacts'));
    }

    public function adminprojects()
    {
        $projets = Project::all();
        return view('adminprojects' , compact('projets'));
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
