<?php

namespace app\model;
class ModelMain
{
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getDate()
    {
        return array('title' => $this->title, 'content' => $this->content);
    }
}