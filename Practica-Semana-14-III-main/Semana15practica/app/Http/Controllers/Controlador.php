<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index()
    {
        $nombre = "Omar";
        $fechaNacimiento = "2006-07-02";
        $comidasFavoritas = ["Pizza", "Hamburguesa", "Tacos"];

        return view('Practica', compact('nombre', 'fechaNacimiento', 'comidasFavoritas'));
    }

    public function catalogo()
    {
        $productos = [
            'cereal' => ['nombre' => 'Corn Flakes', 'precio' => 3.99, 'categoria' => 'Desayuno'],
            'leche' => ['nombre' => 'Leche Entera', 'precio' => 1.49, 'categoria' => 'Lácteos'],
            'azucar' => ['nombre' => 'Azúcar', 'precio' => 0.99, 'categoria' => 'Despensa'],
        ];

        return view('Catalogo', compact('productos'));
    }
}
