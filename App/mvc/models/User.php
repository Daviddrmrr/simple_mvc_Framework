<?php
namespace mvc\Models;

use Core\Interfaces\UserInterface;

class User implements UserInterface
{
    private $connection;
    private $usersTable = 'singup';

    public function __construct($database)
    {
        $this->connection = $database;
    }

    public function fetch()
    {
        $query = "SELECT * FROM $this->usersTable";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }

    public function fetchById(int $id)
    {}

    public function update(array $data)
    {}

    public function delete(int $id)
    {}
}
