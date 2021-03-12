<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;

class Welcome extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}
