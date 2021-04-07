<?php

namespace App\Http\Livewire\Players;

use App\Providers\RouteServiceProvider;
use Livewire\Component;
use App\Models\Player;
use App\Models\Score;

class Leaderboard extends Component
{
    protected $listeners = ['scoreAdded' => 'render'];

    public function render()
    {
        $players = Player::all();

        $players = collect($players)->map(function($player) {
            $all_scores = Score::where('player_id', $player->id)->get();

            if ($all_scores->count() <= 0) {
                return $player;
            }

            $player = $player->getStats();

            return $player;

        });

        $players = $players->sortBy('handicap_index');


        return view('livewire.players.leaderboard', ['players' => $players])->extends('layouts.auth');
    }
}
