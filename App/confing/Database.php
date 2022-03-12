<?php
namespace Config;

class Database
{
    private $host = 'localhost';
    private $databaseName = 'cadman';
    private $username = 'root';
    private $password = '';
    private $connection = null;

    public function connect()
    {
        try {
            $this->connection = new \PDO("mysql:host=$this->host;dbname=$this->databaseName", $this->username, $this->password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
        return $this->connection;
    }
}
