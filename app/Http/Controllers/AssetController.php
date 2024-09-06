<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataFakers\AssetFaker;

class AssetController extends Controller
{
    /**
     * Devuelve la vista con los activos cargados
     * DEMO
     */
    public function index() {
        return view('assets.index', [
            'assets' => AssetFaker::all(),
        ]);
    }
}
