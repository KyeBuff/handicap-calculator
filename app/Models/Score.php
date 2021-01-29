<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'strokes',
        'points',
        'course_id',
        'player_id',
    ];


    public function player()
    {
        return $this->hasOne('App\Models\Player')->withDefault();
    }

    public function course()
    {
        return $this->hasOne('App\Course')->withDefault();
    }
}
