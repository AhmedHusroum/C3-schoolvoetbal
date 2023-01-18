<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected  $tabel = "matches";
    protected $fillable = ['teamA_id', 'teamB_id', 'scoreA', 'scoreB'];
    
}
