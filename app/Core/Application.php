<?php

class Application
{
    private $db;
    private $router;

    public function __construct()
    {
        Env::load('../.env');

        $this->db = new Database();

        $router = $this->router;

        require __DIR__ . '/../../routes/web.php';
    }

    public function run()
    {
        $this->router->dispatch();
    }
}