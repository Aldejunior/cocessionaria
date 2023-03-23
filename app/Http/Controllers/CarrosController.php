<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view ('carros.index', compact ('carros'));
    }

    public function create()
    {
        return view ('carros.create');
    }

    public function store(request $requisicao)
    {
        $carro = new carro();
        $carro->modelo = $requisicao->modelo;
        $carro->marca = $requisicao->marca;
        $carro->cor = $requisicao->cor;
        $carro->motor = $requisicao->motor;
        $carro->ano = $requisicao->ano;

        $carro->save();
    }
}
