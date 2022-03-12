<?php
namespace mvc\controller;
require "../App/core/basecontroller.php";

use Config\Database;
use mvc\Models\User;
use Core\BaseController;

class Xcontroller extends basecontroller
{
    
    public function Home()
    {
        parent::view('mvc', 'defulte', 'Home');
    }
    public function notfound()
    {
        parent::view('mvc', 'notfound', 'notfound');
    }
    public function users()
    {
        $database = (new Database())->connect();
        $users = new User($database);
        $result = $users->fetch();
        $result = $result->fetchAll(\PDO::FETCH_ASSOC);

        parent::view('mvc', 'defulte', 'users', ['param' => $result,]);
    }
}
