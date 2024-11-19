<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;
use App\Models\UsuariosModel;

class Main extends BaseController
{
    public function index()
    {
        //echo 'Testando elementos';
        // $model_usuarios = new UsuariosModel();
        // $usuarios = $model_usuarios->findAll();
        // // dd($usuarios); // função para debug
        // echo '<pre>';
        // print_r($usuarios);
        // echo '</pre>';     
        // // tasks
        // $model_tasks = new TasksModel();
        // $tasks = $model_tasks->findAll();
        //  // dd($usuarios); // função para debug
        // echo '<pre>';
        // print_r($tasks);
        // echo '</pre>';
        return view('teste');


    }
    public function login()
    {

        return view('login_frm');
    }
    public function login_submit()
    {

        echo 'login submit';
    }      
}
