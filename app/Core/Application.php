<?php

class Application
{
    private $db;
    private $router;

    public function __construct()
    {
        // Load environment variables
        Env::load(__DIR__ . '/../../.env');

        // Connect database
        $this->db = new Database();

        // Create router
        $this->router = new Router();

        // Make router available to routes/web.php
        $router = $this->router;

        // Register routes
        require __DIR__ . '/../../routes/web.php';
    }

    public function run()
    {
        $this->router->dispatch();
    }
}