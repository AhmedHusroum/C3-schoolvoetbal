<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\User;
use App\Models\Account;
use App\Models\Generate;
use App\Models\Players;
use Illuminate\Http\Request;


class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $plan_teams is voor modal.generate.crate(door modal gebruik)
        $plan_teams = Team::all();
        //=======================
        $teams = Team::all()->where('status', '0');
        return view('dashboard.teams.index')->with('teams', $teams)->with('plan_teams', $plan_teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Account::all();
        return view('dashboard.teams.create')->with('teams')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'team_name' => 'required',
            'school_name' => 'required',
            'players' => 'required',
            'locatie' => 'required'
        ]);
        
        
        $team = new Team();
        $team->team_name = $request->team_name;
        $team->school_name = $request->school_name;
        // $team->number_players = $request->number_players;
        // $team->players = $request->players;
        $team->locatie = $request->locatie;
        $team->creator_id = \Auth::id();
        $team->save();

        $players =  new Players();
        $players->user_id = $request->players;
        $players->team_id = $request->players;
        $players->save();

        return redirect('/')->with('status', 'Je team is succesvol opgeslagen');
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
    public function edit($id)
    {
        $teams = Account::all();
       
        $team = Team::findOrFail($id);
        return view('/dashboard.teams.edit')->with(['team' => $team])->with('teams', $teams);
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
        $this->validate($request,[
            'team_name' => 'required',
            'school_name' => 'required',
            'players' => 'required',
            'locatie' => 'required'
        ]);

        $team = Team::findOrFail($id);

        $team->team_name = $request->team_name;
        $team->school_name = $request->school_name;
        // $team->number_players = $request->number_players;
        $team->players = $request->players;
        $team->locatie = $request->locatie;
        $team->creator_id = \Auth::id();
        
        $team->save();
        return redirect('/')->with('status', 'Je team is succesvol Aangepast');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::destroy($id);
        return redirect('/')->with('status', 'Teams succesvol verwijderd');

    }
}
