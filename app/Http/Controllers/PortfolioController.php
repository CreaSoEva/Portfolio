<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Skill;
use App\Models\Study;
use App\Models\Information;
use App\Models\Project;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\MailContact;

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

    public function formContact() {
    	return view('contact');
    }

    public function envoiContact(ContactRequest $request) {
        $infos = $request->except('_token', 'valider');
        Mail::to('creasoeva03@gmail.com')
            ->send(new MailContact($request));
        Contact::create($infos);
        return redirect('contact')->with('message', 'Votre message a bien été envoyé');
    }
}
