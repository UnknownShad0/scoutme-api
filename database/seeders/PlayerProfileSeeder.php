<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlayerProfile;


class PlayerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlayerProfile::create([
            'name' => 'Juan Dela Cruz',
            'position' => 'Point Guard',
            'height' => 175,
            'weight' => 68,
            'school' => 'Bestlink College of the Philippines',
            'bio' => 'Fast and agile playmaker with sharp vision.',
            'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ]);

        PlayerProfile::create([
            'name' => 'Mark Reyes',
            'position' => 'Shooting Guard',
            'height' => 183,
            'weight' => 72,
            'school' => 'Far Eastern University',
            'bio' => 'Accurate 3-point shooter with great defense.',
            'video_url' => 'https://www.youtube.com/watch?v=oHg5SJYRHA0',
        ]);
    }
}
