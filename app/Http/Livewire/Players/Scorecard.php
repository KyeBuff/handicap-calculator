<?php

namespace App\Http\Livewire\Players;

use Livewire\Component;
use App\Models\Course;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class Scorecard extends Component
{
    /** @var string */
    public $strokes = '';

    /** @var string */
    public $points = '';

    /** @var string */
    public $course = '';

    public function welcome()
    {
        return view('welcome');
    }

    public function log()
    {
        $this->validate([
            'strokes' => ['required'],
            'points' => ['required'],
            'course' => ['required'],
        ]);

        $user = Auth::user();

        $score = Score::create([
            'strokes' => $this->strokes,
            'points' => $this->points,
            'player_id' => $user->player->id,
            'course_id' => $this->course,
        ]);

        $user->player->updateHandicap($this->points);

        $this->emit('scoreAdded');

    }

    public function render()
    {
        $courses = Course::orderBy('name', 'ASC')->get();

        return view('livewire.players.scorecard', ['courses' => $courses]);
    }
}
