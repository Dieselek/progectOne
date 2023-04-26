<?php

namespace App\controller;

use App\model\AuthModel;

class RegisterController
{
    public $authModel;
    public function __construct(AuthModel $authModel)
    {
        $this->authModel=$authModel;
    }

    public function addUser()
    {
        $this->authModel->registration();

    }
}