<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';

    protected $guarded = [];

    protected $fillable = ['won', 'draw', 'lost,', 'pts'];
    

    public function match()
    {
        return $this->belongsTo(Generate::class);
    }

    public function getMatchesPlayedAttribute()
    {
        return $this->won + $this->draw + $this->lost;
    }

    // public function getPtsAttribute()
    // {
    //     return $this->won*3 + $this->draw*1;
    // }

    // public function getWinsChanceAttribute()
    // {
    //     return  100 - $this->lost - $this->draw;
    // }

    // public static function boot()
    // {
    //    parent::boot();
    //    static::saving(function($match_result){
    //     $match_result->pts = ($match_result->scoreA) > ($match_result->scoreB);
    //    });
    // }
   


    public function users(){
        return $this->hasMany(User::class);
    }
}

