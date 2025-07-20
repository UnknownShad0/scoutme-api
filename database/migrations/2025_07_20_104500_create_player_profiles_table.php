<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('player_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->float('height')->nullable(); // in cm or inches
            $table->float('weight')->nullable(); // in kg or lbs
            $table->string('school')->nullable();
            $table->text('bio')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_profiles');
    }
};
