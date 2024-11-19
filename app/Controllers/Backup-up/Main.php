<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;
use App\Models\UsuariosModel;

class Main extends BaseController
{
    public function index()
    {
        //echo "Olá, Mundo !";

        $model_usuarios = new UsuariosModel();
        $usuarios = $model_usuarios->findAll();

        // dd($usuarios); // função para debug

        echo '<pre>';
        print_r($usuarios);
        echo '</pre>';

        // tasks
        $model_tasks = new TasksModel();
        $tasks = $model_tasks->findAll();
        
        echo '<pre>';
        print_r($tasks);
        echo '</pre>';
    }
}