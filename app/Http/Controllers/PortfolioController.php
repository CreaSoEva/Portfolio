<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Study;
use App\Models\Information;
use App\Models\Project;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index() {
    	$sections = array('firstligne', 'twoligne', 'threeligne');
    	$projets = Project::all();
    	return view('welcome' , compact('projets', 'sections'));
    }

    public function profil() {
        $skills = Skill::all();
        $studies = Study::all();
        $informations = Information::all();
    	return view('profil' , compact('skills', 'studies' , 'informations'));
    }

    public function contact() {
        $contacts = Contact::all();
    	return view('contact' , compact('contacts'));
    }
}
