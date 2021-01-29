<?php

namespace App\Http\Livewire\Players;

use App\Providers\RouteServiceProvider;
use Livewire\Component;
use App\Models\Player;
use App\Models\Score;

class Leaderboard extends Component
{
    public function render()
    {
        $players = Player::all();

        $players = collect($players)->map(function($player) {
            $all_scores = Score::where('player_id', $player->id)->get();

            if (collect($all_scores)->count() <= 0) {
                return $player;
            }

            $player->points = collect($all_scores)->reduce(function($total_score, $score) {
                return $total_score += $score->points;
            }, 0);

            $player->average_points = collect($all_scores)->reduce(function($total_score, $score) {
                return $total_score += $score->points;
            }, 0) / collect($all_scores)->count();
            return $player;
        });

        return view('livewire.players.leaderboard', ['players' => $players])->extends('layouts.auth');
    }
}
