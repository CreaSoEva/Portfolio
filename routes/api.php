<?php

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Study;
use App\Models\Information;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/skills', function () {					exemple rapide pour la table Skills, on met la fonction directement dans la route au lieu d'utiliser un controleur, mais qui est tout à fait possible aussi 

//         header("Access-Control-Allow-Origin: *");        * permet que tout le monde puisse acceder à mon Api
//         header('Access-Control-Allow-Methods: GET');       ce cas permet d'acceder que via le Get
//         return Skills::get();

// });


// Route::get('/projects', function () {
//         header("Access-Control-Allow-Origin: *");        1er jet pour creer la protection de l'api, qui sera remplace par middleware à suivre
//         header('Access-Control-Allow-Methods: GET');    
//         return Project::get();
// });

Route::middleware('auth:api')->get('/users', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return User::get();
});

Route::middleware('auth:api')->get('/projects', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Project::get();
});

Route::middleware('auth:api')->get('/skills', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Skill::get();
});

Route::middleware('auth:api')->get('/studies', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Study::get();
});

Route::middleware('auth:api')->get('/informations', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Information::get();
});