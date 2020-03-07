<?php

namespace App\Model;

class Photo extends \Core\Classes\Model
{
    protected $table = 'Photos';
    protected $userId;
    protected $photo;

    public function __construct($photo, $userId, $method = 1)
    {
        switch ($method) {
            case '1':
                $this->userId = $userId;
                $this->photo = $photo;
                $this->setPhotoId();
                break;
            case '2':
                $this->userId = $userId;
                $this->removePhotoId();
                break;
            case '3':
                break;
            default:
                $this->userId = $userId;
                $this->getPhotoId();
                break;
        }
    }

    public function setPhotoId()
    {
        $uploaddir = "./assets/profiles/";
        //$uploadfile = $uploaddir . basename($_FILES['profile']['name']);

        //ver($_FILES);

        $uploadfile = $uploaddir . $this->userId . '.jpg';

        if(move_uploaded_file($this->photo, $uploadfile)){
            //echo 'Arquivo válido e enviado com sucesso.\n';
        }else{
            //die('Possivel ataque !');
            //echo 'Possivel ataque !';
        }
    }

    public function getPhotoId()
    {
        return file_get_contents("/assets/profiles" . $_SESSION['id'] . '.jpg');
    }

    public function removePhotoId()
    {

    }
}