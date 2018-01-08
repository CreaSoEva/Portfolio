<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
    	return view('welcome');
    }

    public function profil() {
    	return view('profil');
    }

    public function contact() {
    	return view('contact');
    }

}
