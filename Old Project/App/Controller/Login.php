<?php
/**
 * Controller Login
 * Author: Maycon de Moraes
 * Date:   27/11/2019
 */

namespace App\Controller;

class Login extends \Core\Classes\Controller
{
    public function __construct($logado = false)
    {
        parent::__construct($logado);
    }
    
    /**
     * Recebe o post do login
     */
    public function logar()
    {
        if ($this->checkPost()) {
            
            $usuario = new \App\Model\Usuario;
            $usuario->setLogin($this->post['usuario']);
            $usuario->setSenha($this->post['senha']);
            $bool = $usuario->authDb();
            if($bool){
                redirect(DEFAULTCONTROLLER.'\logado');
            }else{
                redirect(DEFAULTCONTROLLER.'\error');
            }
           
        } else {
            redirect(DEFAULTCONTROLLER);
        }
    }

    public function logof()
    {
        \Core\Classes\Security::destroy();
        redirect(DEFAULTCONTROLLER);
    }
}