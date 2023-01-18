<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'users';

    // public function user(){
    //     return $this->belongsTo(Team::class, 'creator_id');
    // }
}
