<?php

class Application
{
    private $db;
    private $router;

    public function __construct()
    {
        Env::load('../.env');

        $this->db = new Database();

        $this->router = new Router();

        require '../routes/web.php';
    }

    public function run()
    {
        $this->router->dispatch();
    }
}