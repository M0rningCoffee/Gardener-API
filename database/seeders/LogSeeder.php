<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Log;


class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plantaRosa = Planta::where('nome_planta', 'Rosa')->first();

        if ($plantaRosa) {
            // 2. Cria logs (com o snapshot 'estado')
            Log::create([
                'planta_id' => $plantaRosa->id,
                'estado' => 40, // Snapshot da umidade
            ]);
            Log::create([
                'planta_id' => $plantaRosa->id,
                'estado' => 45, // Snapshot posterior
            ]);
        }

        // 3. Cria um log para outra planta (ex: Cacto)
        $plantaCacto = Planta::where('nome_planta', 'Cacto')->first();
        if ($plantaCacto) {
            Log::create([
                'planta_id' => $plantaCacto->id,
                'estado' => 12,
            ]);    
        }
    }
}