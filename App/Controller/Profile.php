<?php

namespace App\Controller;

class Profile extends \Core\Classes\Controller
{
    public function __construct($logado = true)
    {
        parent::__construct($logado);
    }

    public function index()
    {
        $usuario = new \App\Model\Usuario;
        \Core\Classes\View::show('profile.html', ['SESSION' => $_SESSION, 'usuario' => $usuario->get($_SESSION['id'])]);
    }

    public function updateProfile()
    {
        //ver($_FILES,1);
        //ver($this->post);

        $img = $_FILES['profile']['tmp_name'];

        (new \App\Controller\Photo($img, $_SESSION['id']));

        $u = new \App\Model\Usuario;
        $u->setNome($this->post['nome']);
        $u->setSobrenome($this->post['sobrenome']);
        $u->setLogin($this->post['login']);
        $u->setEmail($this->post['email']);
        if ($this->post['senha'] != '') {
            $u->setSenha($this->post['senha']);
        }
        if ($this->post['empresa'] != ''){
            $u->setEmpresa($this->post['empresa']);
        }
        $u->update($this->post['id']);

        header("Location: /Profile");
    }
}