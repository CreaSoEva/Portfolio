<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index() {
    	$sections = array('firstligne', 'twoligne', 'threeligne');
    	$projets = Project::all();
    	return view('welcome' , compact('projets', 'sections'));
    }

    public function profil() {
    	return view('profil');
    }

    public function contact() {
    	return view('contact');
    }
}
