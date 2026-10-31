<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::query()->delete();
        User::query()->delete();

        Customer::insert([
            ['full_name' => 'Julian Vance', 'email' => 'julian.vance@example.com', 'phone' => '09171234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Maeve Sterling', 'email' => 'maeve.sterling@example.com', 'phone' => '09181234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Darius Cross', 'email' => 'darius.cross@example.com', 'phone' => '09191234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Clara Mercer', 'email' => 'clara.mercer@example.com', 'phone' => '09201234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Callum Thorne', 'email' => 'callum.thorne@example.com', 'phone' => '09211234567', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::insert([
            ['username' => 'admin', 'full_name' => 'System Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier1', 'full_name' => 'Seraphina Lock', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier2', 'full_name' => 'Ronan Bennett', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'manager1', 'full_name' => 'Patrick Jane', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'staff1', 'full_name' => 'Gideon Hayes', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
