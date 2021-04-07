<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HandicapHistory extends Model
{
    use HasFactory;

    protected $fillable = ['handicap_index', 'player_id'];
}
