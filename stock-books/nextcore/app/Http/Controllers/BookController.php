<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Por enquanto, vamos devolver dados manuais para o JS não dar erro
        return response()->json([
            ['id' => 1, 'titulo' => 'O Senhor dos Anéis', 'autor' => 'J.R.R. Tolkien', 'genero' => 'Fantasia', 'qtd' => 15, 'preco' => 89.90],
            ['id' => 2, 'titulo' => '1984', 'autor' => 'George Orwell', 'genero' => 'Ficção Distópica', 'qtd' => 8, 'preco' => 45.00],
            ['id' => 3, 'titulo' => 'Dom Casmurro', 'autor' => 'Machado de Assis', 'genero' => 'Romance', 'qtd' => 12, 'preco' => 35.90],
        ]);
    }
}
}