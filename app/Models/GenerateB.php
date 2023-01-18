<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerateB extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $guarded = [];


    protected $fillable = ['teamB'];
    
    public function team()
    {
        return $this->belongsTo(Team::class,'teamB_id');
    }

    
}
