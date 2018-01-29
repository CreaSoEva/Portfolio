<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudyRequest;
use App\Http\Requests\SkillRequest;
use App\Http\Requests\InformationRequest;
use App\Http\Requests\ProjectRequest;
use App\Models\Skill;
use App\Models\Study;
use App\Models\Information;
use App\Models\Project;
use App\Models\Contact;

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
    

            // Controller Routes de la création d'un contenu 



    public function addadminstudies(Request $request)
    {
        return view('admin/add/addadminstudies');
    }
    public function goaddadminstudies(StudyRequest $request)
    {     
        Study::create($request->except('_token', 'valider'));
        return redirect('admin/adminstudies')->with('success', 'La formation a bien été ajoutée');
    }

    public function addadminskills(Request $request)
    {
        return view('admin/add/addadminskills');
    }
    public function goaddadminskills(SkillRequest $request)
    {     
        Skill::create($request->except('_token', 'valider'));
        return redirect('admin/adminskills')->with('success', 'La compétence a bien été ajoutée');
    }

    public function addadmininformations(Request $request)
    {
        return view('admin/add/addadmininformations');
    }
    public function goaddadmininformations(InformationRequest $request)
    {   
        Information::create($request->except('_token', 'valider'));
        return redirect('admin/admininformations')->with('success', 'Les informations ont bien été ajoutées');
    }

    public function addadminprojects(Request $request)
    {
        return view('admin/add/addadminprojects');
    }
    public function goaddadminprojects(ProjectRequest $request)
    {
        Project::create($request->except('_token', 'valider'));
        return redirect('admin/adminprojects')->with('success', 'Le projet a bien été ajouté');
    }

   
                // Controller Routes de la Modification et sauvegarde d'un contenu 



    public function editadminstudies($id)
    {
        $studies= Study::find($id);
        return view('admin/edit/editadminstudies',compact('studies'));
    }
                                             
      public function saveeditadminstudies(StudyRequest $request)
    { 
        $studies = Study::find($request->id);
        $studies->user_id = $request->user()->id;
        $studies->name = $request->name;
        $studies->description = $request->description;
        $studies->date_start = $request->date_start;
        $studies->date_end = $request->date_end;
        $studies->save();
        return redirect('admin/adminstudies') -> with('success', 'La formation a bien été modifiée');
    }

    public function editadminskills($id)
    {
        $skills= Skill::find($id);
        return view('admin/edit/editadminskills',compact('skills'));
    }

     public function saveeditadminskills(SkillRequest $request)
    {   
        $skills = Skill::find($request->id);
        $skills->user_id = $request->user()->id;
        $skills->name = $request->name;
        $skills->type = $request->type;        
        $skills->save();
        return redirect('admin/adminskills') -> with('success', 'La compétence a bien été modifiée');
    }

    public function editadmininformations($id)
    {    
        $informations= Information::find($id);
        return view('admin/edit/editadmininformations',compact('informations'));
    }

     public function saveeditadmininformations(InformationRequest $request)
    { 
        $informations = Information::find($request->id);
        $informations->user_id = $request->user()->id;
        $informations->name = $request->name;
        $informations->email = $request->email;
        $informations->postcode = $request->postcode;
        $informations->city = $request->city;
        $informations->phone = $request->phone;
        $informations->save();
        return redirect('admin/admininformations') -> with('success', 'Les informations ont bien été modifiées');
    }

    public function editadminprojects($id)
    { 
        $projets= Project::find($id);
        return view('admin/edit/editadminprojects',compact('projets'));
    }

     public function saveeditadminprojects(ProjectRequest $request)
    {  
        $projets = Project::find($request->id);
        $projets->user_id = $request->user()->id;
        $projets->title = $request->title;
        $projets->description = $request->description;
        $projets->image = $request->image;
        $projets->date_projet = $request->date_projet;
        $projets->save();
        return redirect('admin/adminprojects') -> with('success', 'Le projet a bien été modifié');
    }    


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
        return redirect('admin/adminprojects') -> with('success','Votre projet a bien été supprimé.');

    }


    public function destroyadmincontact($id)
    {   
        $supp = Contact::where("id", "=" , $id)->delete();
        return redirect('admin/admincontact') -> with('success','Votre message a bien été supprimé.');

    }



}
