<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airportAuthority = User::create([
            'name' => 'Airport Authority User',
            'email' => 'airports@admin.com',
            'password' => Hash::make('password123'),
        ]);
        $airportAuthority->assignRole('airport-authority');

        $customer = User::create([
            'name' => 'Customer User',
            'email' => 'customer@user.com',
            'password' => Hash::make('password123'),
        ]);
        $customer->assignRole('customer');

        $pilot = User::create([
            'name' => 'Pilot User',
            'email' => 'pilot@user.com',
            'password' => Hash::make('password123'),
        ]);
        $pilot->assignRole('pilot');

        $testCustomer = User::create([
            'name' => 'Test Customer',
            'email' => 'testcustomer@user.com',
            'password' => Hash::make('password123'),
        ]);
        $testCustomer->assignRole('customer');

        $testPilot = User::create([
            'name' => 'Test Pilot',
            'email' => 'testpilot@user.com',
            'password' => Hash::make('password123'),
        ]);
        $testPilot->assignRole('pilot');

    }
}
