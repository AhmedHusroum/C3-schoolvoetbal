<?php

namespace App\Http\Controllers;

use App\Models\Generate;
use App\Models\GenerateB;
use App\Models\Team;
use Illuminate\Http\Request;


class MatchController extends Controller
{
    public function matchShow($match_id) {
        $match = Generate::findOrFail($match_id);
        $teamB = GenerateB::findOrFail($match_id);

        // match_result is for modal.generate.edit(door modal)
        $match_result = Generate::findOrFail($match_id);
        $match_resultB = GenerateB::findOrFail($match_id);
        return view('pages.match.show')->with('match', $match)->with('teamB', $teamB)->with('match_result', $match_result)
        ->with('match_resultB', $match_resultB);
    }

    public function matchIndex($match_id) {
        $teamsA = Generate::findOrFail($match_id);
        $teamsB = GenerateB::findOrFail($match_id);
        return view('modal.generate.index')->with('teamsA', $teamsA)->with('teamsB', $teamsB);
    }

    // public function matchUpdate(Team $team) {
    //     return view('pages.match.edit', compact('team'));
    // }
}