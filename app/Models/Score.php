<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->hasOne('App\Player')->withDefault();
    }

    public function course()
    {
        return $this->hasOne('App\Course')->withDefault();
    }
}
