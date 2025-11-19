<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Planta;

class PlantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soloArgilosoId = Solo::where('tipo', 'Argiloso')->first()->id;
        $soloArenosoId = Solo::where('tipo', 'Arenoso')->first()->id;

        Planta::create([
            'nome_planta' => 'Rosa',
            'umidade' => 45,
            'solo_id' => $soloArgilosoId,
        ]);
        
        Planta::create([
            'nome_planta' => 'Cacto',
            'umidade' => 10,
            'solo_id' => $soloArenosoId,
        ]);
        
        Planta::create([
            'nome_planta' => 'Samambaia',
            'umidade' => 60,
            'solo_id' => Solo::inRandomOrder()->first()->id, 
        ]);    
    }
}
