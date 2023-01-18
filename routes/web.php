<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// startpage/homepage



// for deashboard
Route::get('/', [PagesController::class, 'dashboard'], function () {
    
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// for profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// for teams
Route::group(['prefix' => 'dashboard','Middleware' => 'auth'], function() {
    Route::resource('teams', TeamsController::class);
});

//for file 'pages'
Route::get('/match_overview', [PagesController::class, 'match'])->name('match');
Route::get('/result', [PagesController::class, 'result'])->name('result');



//for accounts.view_accounts
Route::group(['prefix' => 'accounts', 'middleware' => 'auth'], function() {
    Route::resource('view', AccountsController::class);
});

Route::get('match/result', [\App\Http\Controllers\GenerationController::class, 'result'])->middleware('auth')
->name('generate.result');

//for modal ->match
Route::group(['prefix' => 'modal', 'Middleware' => 'auth'], function() {
    Route::resource('generate', GenerationController::class);
});
Route::apiResource('posts', PostController::class);


//for pages->match->show
Route::get('/matches/{match_id}/matchShow', [MatchController::class, 'matchShow'])->name('matches.matchShow')
->middleware('auth');

//for pages->match->index
Route::get('/matches/{match_id}/index', [MatchController::class, 'matchIndex'])->name('matches.matchIndex')
->middleware('auth');

//for pages->match->edit
Route::get('update-team/{team}', [MatchController::class, 'matchUpdate'])->name('matches.matchEdit')->middleware('auth');

require __DIR__.'/auth.php';

require __DIR__.'/api.php';
