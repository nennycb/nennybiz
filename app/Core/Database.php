<?php

class Database
{
    private $pdo;
    private $stmt;

    public function __construct()
    {
        $host = Env::get('DB_HOST');
        $db   = Env::get('DB_NAME');
        $user = Env::get('DB_USER');
        $pass = Env::get('DB_PASS');

        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

        try {

            $this->pdo = new PDO($dsn, $user, $pass);

            $this->pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->pdo->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

        } catch(PDOException $e) {

            die($e->getMessage());

        }
    }

    public function query($sql)
    {
        $this->stmt = $this->pdo->prepare($sql);
    }

    public function bind($param, $value)
    {
        $this->stmt->bindValue($param, $value);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function fetch()
    {
        $this->execute();
        return $this->stmt->fetch();
    }

    public function fetchAll()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }
}