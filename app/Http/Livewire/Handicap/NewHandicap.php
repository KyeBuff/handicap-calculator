<?php

namespace App\Http\Livewire\Handicap;

use App\Providers\RouteServiceProvider;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;

class NewHandicap extends Component
{
    /** @var string */
    public $handicap = '';

    public function submit()
    {
        $this->validate([
            'handicap' => ['required'],
        ]);

        $player = Player::where('user_id', Auth::user()->id)->first();
        $player->handicap_index = $this->handicap;
        $player->save();

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.handicap.new')->extends('layouts.auth');
    }
}
