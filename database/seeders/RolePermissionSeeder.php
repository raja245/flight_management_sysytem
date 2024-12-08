<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $customer = Role::create(['name' => 'customer']);
        $pilot = Role::create(['name' => 'pilot']);
        $airport_authority = Role::create(['name' => 'airport-authority']);

        $manageFlights = Permission::create(['name' => 'manage-flights']);
        $createBookings = Permission::create(['name' => 'create-bookings']);
        $cancelBookings = Permission::create(['name' => 'cancel-bookings']);
        $viewBookings = Permission::create(['name' => 'view-bookings']);

        $admin->givePermissionTo(Permission::all());
        $customer->givePermissionTo([$createBookings, $viewBookings, $cancelBookings]);
        $airport_authority->givePermissionTo($manageFlights);
    }
}
