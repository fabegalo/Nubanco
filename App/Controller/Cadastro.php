<?php

namespace App\Controller;

class Cadastro extends \Core\Classes\Controller
{
    public function __construct($logado = false)
    {
        parent::__construct($logado);
    }

    public function index()
    {
        \Core\Classes\View::show('cadastro.html', [], ['cadastro' => true]);
    }

    public function Cadastrar()
    {
        
    }
    
        
    
}