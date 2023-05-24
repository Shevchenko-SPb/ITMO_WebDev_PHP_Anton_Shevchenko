<?php

class Main  {

public $_main = "Это main\n";

public function __construct(string $h , $f) {
$this->_header = $h . '1';
$this->_footer = $f;
}

function index(){
echo "static method";
}

function header(){
echo $this->_header;
}
}
