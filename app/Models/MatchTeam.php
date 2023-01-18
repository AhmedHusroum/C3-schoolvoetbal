<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchTeam extends Model
{
    use HasFactory;

    protected $table = 'matches_teams';

    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class,'team_id');
    }
}
