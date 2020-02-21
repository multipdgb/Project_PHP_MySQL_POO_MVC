<?php

class ErrorController
{
    public $message;
    public function __construct($message)
    {
        $this->message = $message;
    }
    public function index()
    {
        echo "<h1 class=" . "__title" . ">{$this->message}</h1>" . '<hr class="__line __line__50"></hr>';
    }
}
