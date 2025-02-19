<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Mhamed',
            'last_name' => 'Ouhanane',
            'email' => 'mhmdeouhnan60@gmail.com',
            'password' => Hash::make('mhmdemhmde1234'),
            'role_id' => 4,
        ]);
    }
}
