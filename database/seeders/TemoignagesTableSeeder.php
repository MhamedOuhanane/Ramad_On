<?php

namespace Database\Seeders;

use App\Models\Temoignage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemoignagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Temoignage::factory(50)->create();
    }
}
