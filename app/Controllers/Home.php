<?php

namespace App\Controllers;  // Define el espacio de nombres (namespace)

class Home extends BaseController  // Declara una clase llamada Home que extiende de BaseController
{
    public function index()  // Método index que cargará nuestra vista
    {
        return view('shopcar');  // Carga la vista llamada index (sin .php)
    }
}
