<?php

namespace Database\Seeders;

use App\Models\Solo;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solo::create(['tipo' => 'Argiloso']);
        Solo::create(['tipo' => 'Arenoso']);
        Solo::create(['tipo' => 'Humoso']);     
    }
}
