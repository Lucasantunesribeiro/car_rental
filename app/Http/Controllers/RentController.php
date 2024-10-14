<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Carro;

class RentController extends Controller
{
    public function index()
    {
        $alugueis = Rent::with('carro')->get(); // Busca todos os aluguéis
        $carrosDisponiveis = Carro::where('disponibilidade', true)->get(); // Busca todos os carros disponíveis
        return view('rents.index', compact('alugueis', 'carrosDisponiveis')); // Passa os aluguéis e carros disponíveis para a view
    }

    public function create($carroId)
    {
        $carro = Carro::findOrFail($carroId); // Busca o carro pelo ID
        return view('rents.create', compact('carro')); // Passa o carro para a view
    }

    // Processa o aluguel do carro
    public function alugar(Request $request)
    {
        $request->validate([
            'carro_id' => 'required|exists:carros,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $carro = Carro::find($request->carro_id);

        if (!$carro || !$carro->disponibilidade) {
            return redirect()->back()->withErrors(['Carro não disponível.']);
        }

        $aluguel = new Rent();
        $aluguel->carro_id = $carro->id; // Atribuir o carro ao aluguel
        $aluguel->data_inicio = $request->start_date; // Atribuir a data de início
        $aluguel->data_fim = $request->end_date; // Atribuir a data de fim

        $dias = (strtotime($request->end_date) - strtotime($request->start_date)) / (60 * 60 * 24) + 1;
        $aluguel->valor_total = $dias * $carro->diaria;

        $aluguel->save();

        $carro->disponibilidade = false;
        $carro->save();

        // Redirecionar de volta com uma mensagem de sucesso
        return redirect()->route('rents.index')->with('success', 'Aluguel realizado com sucesso!');
    }
}
