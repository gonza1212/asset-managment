<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataFakers\AssetFaker;

class AssetController extends Controller
{
    /**
     * Devuelve la vista con la lista de los activos cargados
     * DEMO
     */
    public function index() {
        return view('assets.index', [
            'assets' => AssetFaker::all(),
        ]);
    }

    /**
     * Devuelve la vista show con el activo indicado
     * DEMO
     */
    public function show($id) {
        return view('assets.show', [
            'asset' => AssetFaker::find($id),
        ]);
    }

    /**
     * Devuelve la vista para cargar un activo nuevo
     */
    public function create() {
        return view('assets.create');
    }
}
