<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Generate extends Model
{
    use HasFactory;
    protected $table = 'matches';

    protected $guarded = [];


    protected $fillable = ['teamA'];
    
    public function team()
    {
        return $this->belongsTo(Team::class,'teamA_id');
    }
    
   

    
    
}
