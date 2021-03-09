<?php
/**
 * Controller Teste
 * Padrão para testes na aplicação
 * 
 * 
 * Author: Fabricio F. Galo
 * Date:   27/02/2020
 */

namespace App\Controller;

class Teste extends \Core\Classes\Controller
{
    /**
     * Sobrescreve o contrutor padrão para que o controller
     * Welcome não controle login em todos os métodos
     */
    public function __construct($logado = false)
    {
        parent::__construct($logado);
    }

    // Método que exige autenticação
    public function index()
    {
        parent::logado();
        //ver($_SESSION,1);
        $u = new \App\Model\Usuario;

        //ver($u->get($_SESSION['id']),1);

        \Core\Classes\View::show('teste.html', ['SESSION' => $_SESSION]);
    }

    public function Teste()
    {
        echo 'HEHE';
        parent::logado();
        //ver($this->post,1);
    
        $img = $_FILES['profile']['name'];

        $uploaddir = "./assets/profiles/";
        //$uploadfile = $uploaddir . basename($_FILES['profile']['name']);
        $uploadfile = $uploaddir . '12.jpg';

        //ver($uploadfile,1);

        if(move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile)){
            echo 'Arquivo válido e enviado com sucesso.\n';
        }else{
            echo 'Possivel ataque !';
        }

        //print_r($_FILES);
        
        echo 'HEHE';
    }

    // Método que exige autenticação
    public function logado()
    {
        parent::logado();
        \Core\Classes\View::show('welcome.html', [
            'logado' => 'Você está logado!'
        ]);
    }

    public function error()
    {
        \Core\Classes\View::show('welcome.html', [
            'ALERT' => '<div class="shadow mb-5 alert alert-warning alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Login Invalido!</strong> Tente Novamente
                        </div>'
        ]);
    }
}