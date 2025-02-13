<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'lastname' => 'super',
            'email' => 'admin@admin.com',
            'phone' => '2288323435',
            'password' => Hash::make('admin@admin.com')
        ]);
    }
}
