<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Score;
class Player extends Model
{
    use HasFactory;

    protected static $handicap_bands = [
        [
            'handicap_index' => 5.5,
            'buffer' => 1,
            'cut' => 0.1,
        ],
        [
            'handicap_index' => 12.5,
            'buffer' => 2,
            'cut' => 0.2,
        ],
        [
            'handicap_index' => 20.5,
            'buffer' => 3,
            'cut' => 0.3,
        ],
        [
            'handicap_index' => 28.5,
            'buffer' => 4,
            'cut' => 0.4,
        ],
        [
            'handicap_index' => 36.1,
            'buffer' => 5,
            'cut' => 0.5,
        ],
    ];

    protected $fillable = ['handicap_index', 'user_id'];

    public function user()
    {
        return $this->hasOne('App\Models\User')->withDefault();
    }

    public function updateHandicap(int $points): Model
    {
        $band = collect(self::$handicap_bands)->filter(function($band) {
            return $this->handicap_index < $band['handicap_index'];
        })->first();

        $points_net = $points - 36;

        if ($points_net > 0) {
            for($i = 0; $i < $points_net; $i += 1) {
                $this->handicap_index -= $band['cut'];
            }
        } else if (abs($points_net) > $band['buffer']) {
            $num_deductions = abs($points_net) - $band['buffer'];
            for($i = 0; $i < $num_deductions; $i += 1) {
                $this->handicap_index += 0.1;
            }
        }

        $this->save();
    }

    public function getStats(): Model
    {
        $all_scores = Score::where('player_id', $this->id)->get();

        if (collect($all_scores)->count() <= 0) {
            return $this;
        }

        $this->average_points = collect($all_scores)->reduce(function($total_score, $score) {
            return $total_score += $score->points;
        }, 0) / collect($all_scores)->count();

        $this->average_strokes = collect($all_scores)->reduce(function($total_score, $score) {
            return $total_score += $score->strokes;
        }, 0) / collect($all_scores)->count();

        return $player;
    }
}
