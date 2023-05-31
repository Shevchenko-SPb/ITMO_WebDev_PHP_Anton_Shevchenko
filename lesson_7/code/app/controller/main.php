<?php

require __DIR__.'/../model/main.php';
require __DIR__.'/../../core/view.php';
class Main
{
    public function index(){
        $mdl  = new ModelMain('My page','My content');
        $mdlGetDate = $mdl -> getDate();
        $view = new View();
        $view->render('layout.html', $mdlGetDate);
    }
}