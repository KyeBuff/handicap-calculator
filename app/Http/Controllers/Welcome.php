<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;

class Welcome extends Controller
{

    public $player = null;

    public function __invoke()
    {
        $user = Auth::user();
        $params = collect([]);

        if (!empty($user)) {
            $player = Player::find($user->player_id);
            $this->player = $player->getStats();
        }
        return view('welcome', ['name' => $user ? $user->name : '', 'player' => $this->player]);
    }
}
