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
        $carro = new Carro();
        $carro->modelo = $requisicao->modelo;
        $carro->marca = $requisicao->marca;
        $carro->cor = $requisicao->cor;
        $carro->motor = $requisicao->motor;
        $carro->ano = $requisicao->ano;

        $carro->save();

        return redirect()->route('carros.show', $carro->id);
    }

    public function show(Carro $carro)
    {

        return view('carros.view', compact('carro'));
    }

    public function edit(Carro $carro)
    {

        return view('carros.edit', compact('carro'));
    }

    public function update(Request $requisicao, Carro $carro)
    {

        $carro->update($requisicao->all());


        return redirect()->route('carros.show', $carro->id);
    }

}
