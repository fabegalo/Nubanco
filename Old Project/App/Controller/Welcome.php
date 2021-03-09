<?php
/**
 * Controller Home
 * Padrão da aplicação, ao baixar e executar o framework a primeira vez 
 * cai na pagina de Welcome
 * 
 * Author: Maycon de Moraes
 * Date:   27/11/2019
 */

namespace App\Controller;


class Welcome extends \Core\Classes\Controller
{
    /**
     * Sobrescreve o contrutor padrão para que o controller
     * Welcome não controle login em todos os métodos
     */
    public function __construct($logado = false)
    {
        parent::__construct($logado);
    }

    // Método que não exige autenticação
    public function index()
    {
        \Core\Classes\View::show('welcome.html');
    }

    public function Teste()
    {
        parent::logado();
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