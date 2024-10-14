<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = ['modelo', 'marca', 'ano', 'cor', 'placa', 'diaria', 'disponibilidade', 'imagem'];

    public static function validate($data)
    {
        $marcas = [
            'Chevrolet' => ['Chevrolet', 'Chevy'],
            'Fiat' => ['Fiat'],
            'Ford' => ['Ford'],
            'Volkswagen' => ['Volkswagen', 'VW'],
            'Renault' => ['Renault'],
            'Toyota' => ['Toyota'],
            'Hyundai' => ['Hyundai'],
            'Honda' => ['Honda'],
            'Jeep' => ['Jeep', 'Jipe'],
            'Nissan' => ['Nissan', 'Nissam'],
            'Peugeot' => ['Peugeot', 'Pegeout'],
            'Citroën' => ['Citroën', 'Citroen'],
            'Mitsubishi' => ['Mitsubishi', 'Mitsubish', 'Mitsubichi'],
            'Mercedes-Benz' => ['Mercedes-Benz', 'Mercedes', 'Benz'],
            'BMW' => ['BMW', 'BM'],
            'Audi' => ['Audi'],
            'Volvo' => ['Volvo'],
            'Kia' => ['Kia'],
            'Land Rover' => ['Land Rover', 'LandRover'],
            'Suzuki' => ['Suzuki'],
            'Subaru' => ['Subaru'],
            'Chery' => ['Chery'],
            'JAC' => ['JAC'],
            'Lifan' => ['Lifan'],
            'Troller' => ['Troller'],
            'Agrale' => ['Agrale'],
            'Aston Martin' => ['Aston Martin', 'Aston', 'Martin'],
            'Bentley' => ['Bentley'],
            'Bugatti' => ['Bugatti', 'Bugati'],
            'Chrysler' => ['Chrysler'],
            'Dodge' => ['Dodge', 'Ram'],
            'Ferrari' => ['Ferrari'],
            'Lamborghini' => ['Lamborghini', 'Lambo', 'Lambohini'],
            'Maserati' => ['Maserati'],
            'McLaren' => ['McLaren'],
            'Porsche' => ['Porsche', 'Porche', 'Porshe'],
            'Rolls-Royce' => ['Rolls-Royce', 'Rolls', 'Royce'],
            'Tesla' => ['Tesla'],
            'Alfa Romeo' => ['Alfa Romeo', 'Alfa', 'Romeo']
        ];

        $marcasValidas = [];
        foreach ($marcas as $variacoes) {
            $marcasValidas = array_merge($marcasValidas, $variacoes);
        }

        $marcasValidas = array_map('strtoupper', $marcasValidas);

        return Validator::make($data, [
            'modelo' => [
                'required',
                'string',
                'min:2',
                'max:50',
                'regex:/^[a-zA-Z0-9\s\-]+$/u'
            ],
            'marca' => [
                'required',
                'string',
                function ($attribute, $value, $fail) use ($marcasValidas) {
                    if (!in_array(strtoupper($value), $marcasValidas)) {
                        $fail('A marca selecionada é inválida.');
                    }
                }
            ],
            'ano' => [
                'required',
                'integer',
                'min:1900',
                'max:' . date('Y')
            ],
            'cor' => [
                'required',
                'string',
                'in:Branco,Preto,Prata,Vermelho,Azul,Verde,Amarelo,Rosa,Roxo,Marrom,Cinza,Laranja,Dourado,Bege,Bordo,Champagne,Cobre,Grafite,Ouro,Pérola,Turquesa,Violeta'
            ],
            'placa' => [
                'required',
                'string',
                'unique:carros,placa',
                function ($attribute, $value, $fail) {
                    $value = strtoupper(str_replace(' ', '', $value));
                    $padroes = [
                        '/^[A-Z]{3}[0-9][A-Z0-9][0-9]{2}$/',
                        '/^[A-Z]{3}[0-9]{4}$/',
                        '/^[A-Z]{2}[0-9]{4}$/',
                        '/^[A-Z]{3}[0-9]{2}[A-Z]$/',
                        '/^[A-Z]{3}[-][0-9]{4}$/',
                        '/^[A-Z]{3}[0-9]{2}[-][A-Z]$/',
                        '/^[A-Z]{2}[-][0-9]{4}$/',
                        '/^[A-Z]{3}[\s][0-9]{4}$/',
                        '/^[A-Z]{3}[0-9]{1}[A-Z]{1}[0-9]{2}$/',
                        '/^[A-Z]{3}[0-9]{1}[\s][A-Z]{1}[0-9]{2}$/',
                        '/^[A-Z]{3}[\s][0-9]{1}[A-Z]{1}[\s][0-9]{2}$/',
                        '/^[A-Z]{3}[\-][0-9]{1}[A-Z]{1}[\-][0-9]{2}$/',
                        '/^[A-Z]{3}[\-][0-9]{1}[\s][A-Z]{1}[\-][0-9]{2}$/',
                        '/^[A-Z]{3}[\s][0-9]{1}[\-][A-Z]{1}[\s][0-9]{2}$/',
                    ];


                    $match = false;
                    foreach ($padroes as $padrao) {
                        if (preg_match($padrao, $value)) {
                            $match = true;
                            break;
                        }
                    }


                    if (!$match) {
                        $fail('O formato da placa é inválido.');
                    }
                }
            ],

            'disponibilidade' => [
                'required',
                'boolean'
            ],

            'diaria' => [
                'required',
                'numeric',
                'min:0.01',
                'max:10000'
            ],
            'imagem' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif,svg',
                'max:2048',
            ],
        ], [
            'imagem.image' => 'O arquivo deve ser uma imagem.',
            'imagem.mimes' => 'A imagem deve ser dos tipos: jpeg, png, jpg, gif, svg.',
            'imagem.max' => 'A imagem não pode ser maior que 2MB.',
        ]);

        if (empty($request->imagem)) {
            $validatedData['imagem'] = 'imagens/carros/carros.png'; // Caminho da imagem padrão
        } else {
            // Move a imagem enviada
            $imageName = time() . '.' . $request->imagem->extension();
            $request->imagem->move(public_path('imagens/carros'), $imageName);
            $validatedData['imagem'] = 'imagens/carros/' . $imageName; // Atribuindo o caminho correto da imagem ao carro
        }




    }
    public function rents()
    {
        return $this->hasMany(Rent::class, 'car_id'); // Certifique-se de que a relação está correta
    }
}
