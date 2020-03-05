<?php

namespace App\Controller;

class Photo extends \Core\Classes\Controller
{
    protected $userId;
    protected $photo;

    public function __construct($img, $userId, $default = true)
    {
        $this->userId = $userId;
        $this->photo = $img;

        if($default == true){
            $this->setPhoto();
        }
    }

    public function getPhoto()
    {
        
    }

    public function setPhoto()
    {
        $img = $this->photo;
        $userId = $this->userId;
        (new \App\Model\Photo($img, $userId));
    }

    public function delPhoto($id)
    {
        (new \App\Model\Photo($this->photo, $this->userId, $method = 2));
    }

    public function updatePhoto($img)
    {
        $this->delPhoto($this->userId);
        $this->setPhoto($img);
    }
}