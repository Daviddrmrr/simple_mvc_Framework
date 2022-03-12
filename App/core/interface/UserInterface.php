<?php
namespace Core\Interfaces;

interface UserInterface
{
    public function fetch();
    public function fetchById(int $id);
    public function update(array $data);
    public function delete(int $id);
}
