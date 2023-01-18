<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Account;
use App\Models\Generate;

class PagesController extends Controller
{
    // public function showHome() {
    //     return view('pages/homepage');
    // }
    
    public function match() {
        $teams = Team::all();
        return view('pages.match_overview')->with('teams', $teams);
    }

    
    public function dashboard() {
        // teams_dash = fordashboard.blade.php (top 5 teams....)
        $teams_dashs = Team::all();
        $teams_dashs = Team::orderBy('pts', 'ASC')->limit(5)->get();
        // 
        $teams = Team::all()->where('players', 'moha');
        $coming_match = Generate::orderBy('match_date', 'ASC')->Limit(1)->get();
        return view('dashboard')->with('teams', $teams)->with('coming_match', $coming_match)->with('teams_dashs', $teams_dashs);
    }
    
    public function result() {
        return view('pages.result');
    }
}
