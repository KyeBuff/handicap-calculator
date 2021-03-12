<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;

class PlayerStats extends Component
{
    public $player = null;
    public $user = null;

    protected $listeners = ['scoreAdded' => 'render'];

    public function render()
    {
        $this->user = Auth::user();

        $player = Player::find($this->user->player_id);
        $this->player = $player->getStats();

        return view('livewire.player-stats');
    }
}
