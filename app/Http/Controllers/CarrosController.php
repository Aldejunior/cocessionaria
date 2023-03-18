<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index(Request $carro)
    {
        $Carro = Carro::all();
        return view ('carros.index', compact ('Carro'));
    }
}
