<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;


class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = ['Liverpool', 'Manchester City', 'Chelsea', 'Arsenal',
            'Nottingham Forest', 'Brighton & Hove Albion', 'Fulham',
             'Newcastle United', 'Aston Villa', 'Bournemouth', 'Brentford',
             'Crystal Palace', 'Everton', 'Ipswich Town', 'Leicester City',
             'Manchester United', 'Southampton', 'Tottenham Hotspur', 
             'West Ham United', 'Wolverhampton Wanderers'];

        foreach($clubs as $clubName) {
            Club::create(['name'=>$clubName]);
        }
    }
}
