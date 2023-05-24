<?php

require_once("view.php");

class About  {

    public $template = 'layout.html';

    public function __construct() {
        $this->model = array('title' => 'О нас', 'content' => 'Я родился ...' );
        $this->view = new View();
    }

    function index(){
        echo "index";
        var_dump($this->template);
        var_dump($this->model);
        echo $this->view->render($this->template, $this->model);
    }
}
