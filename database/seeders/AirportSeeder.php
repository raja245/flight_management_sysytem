<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Airport;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $air = Airport::create([
            'name' => 'Skyhaven International Airport',
            'location' => 'New Haven, Arcadia ',
        ]);

        $air = Airport::create([
            'name' => 'Evergreen Regional Airport',
            'location' => 'Willow Creek, Montana',
        ]);

        $air = Airport::create([
            'name' => 'Pacific Crest Airport',
            'location' => 'Coastal Bay, California',
        ]);

        $air = Airport::create([
            'name' => 'Azure Sky Airport',
            'location' => 'Blue Ridge, Virginia',
        ]);

        $air = Airport::create([
            'name' => 'Solstice Airfield',
            'location' => 'Desert Oasis, Arizona',
        ]);

        $air = Airport::create([
            'name' => 'Northern Star Airport',
            'location' => 'Aurora, Alaska',
        ]);
    }
}
