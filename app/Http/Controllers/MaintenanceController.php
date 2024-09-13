<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataFakers\MaintenanceFaker;

class MaintenanceController extends Controller
{
    /**
     * Devuelve la vista con los datos de los mantenimientos programados
     * DEMO
     */
    public function index() {
        return view('maintenance.index', [
            'maintenance' => MaintenanceFaker::all(),
            'pending' => MaintenanceFaker::pending(),
            'upcoming' => MaintenanceFaker::upcoming(),
        ]);
    }
}
