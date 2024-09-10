<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataFakers\ProjectFaker;

class ProjectController extends Controller
{
    /**
     * Devuelve la vista con la lista de los proyectos cargados
     * DEMO
     */
    public function index() {
        return view('projects.index', [
            'projects' => ProjectFaker::all(),
        ]);
    }

    /**
     * Devuelve la vista show con el proyecto indicado
     * DEMO
     */
    public function show($id) {
        return view('projects.show', [
            'project' => ProjectFaker::find($id),
        ]);
    }
}
