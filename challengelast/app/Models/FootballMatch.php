<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class FootballMatch extends Model
{
    use HasFactory;
    protected $casts = [
        'date' => 'date',
    ];

    protected $fillable = ['home_team_id', 'away_team_id', 'date', 'result'];

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }


    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_match');
    }
}