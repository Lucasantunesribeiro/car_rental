<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Busca todos os usuários
        $users = User::all();

        // Retorna a visão com os usuários
        return view('users.index', compact('users'));
    }
}
