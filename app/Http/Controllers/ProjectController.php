<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataFakers\ProjectFaker;

class ProjectController extends Controller
{
    /**
     * Devuelve la vista con la lista de los activos cargados
     * DEMO
     */
    public function index() {
        return view('projects.index', [
            'projects' => ProjectFaker::all(),
        ]);
    }
}
