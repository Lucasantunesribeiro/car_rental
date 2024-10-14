<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carro;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = ['carro_id', 'data_inicio', 'data_fim', 'valor_total']; // Corrigido para os nomes corretos

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id'); // Certifique-se de que a relação está correta
    }
}
