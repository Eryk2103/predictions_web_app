<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = Storage::json('fixtures_data.json');
        $games = $file['matches'];
    
        foreach($games as $game) {
            $week = explode(' ', $game['round'])[1];
            $home_team_id = Club::where('name', $game['team1'])->first()->id;
            $away_team_id = Club::where('name', $game['team2'])->first()->id;
            $home_team_score = isset($game['score']['ft'][0]) ? $game['score']['ft'][0] : null;
            $away_team_score = isset($game['score']['ft'][1]) ? $game['score']['ft'][1] : null;

            Game::create([
                'week' => $week,
                'home_club_id' => $home_team_id,
                'away_club_id' => $away_team_id,
                'home_club_score' => $home_team_score,
                'away_club_score' => $away_team_score
            ]);
        }
    }
}
