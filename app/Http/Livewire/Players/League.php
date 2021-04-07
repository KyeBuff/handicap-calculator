<?php

namespace App\Http\Livewire\Players;
use App\Models\Player;
use App\Models\League as LeagueModel;

use Livewire\Component;

class League extends Component
{
    protected $listeners = ['scoreAdded' => 'render'];

    public function render()
    {
        $players = Player::all();

        $players = collect($players)->map(function($player) {
            $all_scores = LeagueModel::where('player_id', $player->id)->get();


            if ($all_scores->count() <= 0) {
                $player->total = 0;
                return $player;
            }

            $player->total = $all_scores->reduce(function($carry, $score) {
                return $carry + $score->points;
            }, 0);


            return $player;

        });

        return view('livewire.players.league', ['players' => $players])->extends('layouts.auth');
    }
}
