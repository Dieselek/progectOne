<?php

namespace App\controller;
use League\Plates\Engine;
class HomeController
{   public $engine;
    public function __construct(Engine $engine)
    {
        $this->engine=$engine;
    }
    public function home()
    {
        echo $this->engine->render('home');
    }
    public function adminHome()
    {
        echo $this->engine->render('adminHome');
    }
    public function adminCategory()
    {
        echo $this->engine->render('adminCategory');
    }
    public function adminImages()
    {
        echo $this->engine->render('adminImages');
    }
    public function registration()
    {
        echo $this->engine->render('registration');
    }
}