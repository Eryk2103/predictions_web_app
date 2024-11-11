<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            /*
            'week',
        'date',
        'home_club_id',
        'away_club_id',
        'home_club_score',
        'away_club_score'*/
            $table->id();
            $table->integer('week');
            $table->foreignId('home_club_id');
            $table->foreignId('away_club_id');
            $table->integer('home_club_score')->nullable();
            $table->integer('away_club_score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
