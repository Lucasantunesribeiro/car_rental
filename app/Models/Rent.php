<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carro;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = ['carro_id', 'data_inicio', 'data_fim', 'valor_total'];

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }
}
