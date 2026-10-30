<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'osmanustalar@gmail.com'],
            [
                'name' => 'Osman Ustalar',
                'password' => bcrypt('test'),
                'is_active' => true
            ]
        );
        User::updateOrCreate(
            ['email' => 'kayacan.serap@gmail.com'],
            [
                'name' => 'Serap Kayacan',
                'password' => bcrypt('1234'),
                'is_active' => true
            ]
        );
    }
}
