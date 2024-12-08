<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aircraft;

class AircraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aircraft = Aircraft::create([
            'aircraft_type' => 'DH.85 Leopard Moth',
            'registration_number' => 'Impressed 14.2.41 SOC 28.2.43',
        ]);
        $aircraft = Aircraft::create([
            'aircraft_type' => 'Percival P.10 Vega Gull',
            'registration_number' => 'Canc 3.2.41',
        ]);
        $aircraft = Aircraft::create([
            'aircraft_type' => 'Percival P.10 Vega Gull',
            'registration_number' => 'Canc 29.8.44',
        ]);
        $aircraft = Aircraft::create([
            'aircraft_type' => 'Taylor J-2 Cub',
            'registration_number' => 'Canc as written off 19.8.38',
        ]);
        $aircraft = Aircraft::create([
            'aircraft_type' => 'DH.82A Tiger Moth',
            'registration_number' => 'Canc 15.6.42',
        ]);
        $aircraft = Aircraft::create([
            'aircraft_type' => 'DH.87A Hornet Moth',
            'registration_number' => 'Canc 11.1.40',
        ]);
    }
}
