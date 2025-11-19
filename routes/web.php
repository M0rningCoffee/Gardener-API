<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantaController;

Route::get('/', [PlantaController::class, 'index']);

