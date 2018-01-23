<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Study;
use App\Models\Information;
use App\Models\Project;
use App\Models\Contact;
use App\Http\Request\SkillRequest;
use App\Http\Request\StudyRequest;
use App\Http\Request\InformationRequest;
use App\Http\Request\ProjectRequest;

class AdminController extends Controller
{
    

                // Controller Routes de la lecture du contenu des tables

    public function adminstudies() 
    {
        $studies = Study::all();        
        return view('admin/adminstudies' , compact('studies'));
    }

    public function adminskills() 
    {
        $skills = Skill::all();
        return view('admin/adminskills' , compact('skills'));
    }

    public function admininformations()
    {
        $informations = Information::all();
        return view('admin/admininformations' , compact('informations'));
    }

    public function admincontact()
    {
        $contacts = Contact::all();
        return view('admin/admincontact' , compact('contacts'));
    }

    public function adminprojects()
    {
        $projets = Project::all();
        return view('admin/adminprojects' , compact('projets'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

                     // Controller Routes de la création d'un contenu  


    // public function addadminstudies(Request $request)
    // {
    //     Study::create($request->except('_token', 'valider'));
    //     return redirect('adminstudies')->with('message', 'La formation a bien été ajoutée');
    // }

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


                    // Controller Routes de la Modification et sauvegarde d'un contenu 


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


                 // Controller Routes de la Suppression d'un contenu 
    public function destroyadminstudies($id)
    {   
        $supp = Study::where("id", "=" , $id)->delete();
        return redirect('admin/adminstudies') -> with('success','Votre formation a bien été supprimée.');

    }

    public function destroyadminskills($id)
    {   
        $supp = Skill::where("id", "=" , $id)->delete();
        return redirect('admin/adminskills') -> with('success','Votre compétence a bien été supprimée.');

    }

    
    public function destroyadmininformations($id)
    {   
        $supp = Information::where("id", "=" , $id)->delete();
        return redirect('admin/admininformations') -> with('success','Votre information a bien été supprimée.');

    }


    public function destroyadminprojects($id)
    {   
        $supp = Project::where("id", "=" , $id)->delete();
        return redirect('admin/adminprojects') -> with('success','Ve projet a bien été supprimé.');

    }


    public function destroyadmincontact($id)
    {   
        $supp = Contact::where("id", "=" , $id)->delete();
        return redirect('admin/admincontact') -> with('success','Votre message a bien été supprimé.');

    }



}
