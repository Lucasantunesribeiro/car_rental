<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function home()
    {
        return view('welcome', ['carros' => Carro::all()]);
    }

    public function index()
    {
        return view('cars.index', ['carros' => Carro::all()]);
    }

    public function show($id)
    {
        return view('cars.show', ['carro' => Carro::findOrFail($id)]);
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
{
    // Valida os dados
    $validatedData = Carro::validate($request->all())->validated();

    // Definindo imagem padrão caso não tenha sido enviada
    if (empty($request->imagem)) {
        $validatedData['imagem'] = 'imagens/carros/carros.png'; // Caminho da imagem padrão
    } else {
        // Move a imagem enviada
        $imageName = time() . '.' . $request->imagem->extension();
        $request->imagem->move(public_path('imagens/carros'), $imageName);
        $validatedData['imagem'] = 'imagens/carros/' . $imageName; // Atribuindo o caminho correto da imagem ao carro
    }

    // Cria o carro no banco de dados
    Carro::create($validatedData);

    return redirect()->route('cars.index');
}



    public function edit($id)
    {
        return view('cars.edit', ['carro' => Carro::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $carro = Carro::findOrFail($id);

        $validatedData = Carro::validate($request->all())->validated();

        // Verificando se uma nova imagem foi enviada
        if ($request->hasFile('imagem')) {
            // Move a nova imagem enviada
            $imageName = time() . '.' . $request->imagem->extension();
            $request->imagem->move(public_path('imagens/carros'), $imageName);
            $validatedData['imagem'] = $imageName; // Atribuindo o nome da nova imagem ao carro
        } else {
            // Mantém a imagem atual se nenhuma nova imagem foi enviada
            $validatedData['imagem'] = $carro->imagem;
        }

        $carro->update($validatedData);

        return redirect()->route('cars.index');
    }


    public function destroy($id)
    {
        Carro::findOrFail($id)->delete();
        return redirect()->route('cars.index');
    }
}
