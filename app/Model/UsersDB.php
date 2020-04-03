<?php


namespace App\Model;


use App\User;
use PhpParser\Node\Expr\Array_;

class UsersDB
{

    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance(){
        if (static::$instance==null){
            static::$instance = new UsersDB();
            static::$instance->users=[1 => new MyUser(1)];
        }
        return static::$instance;
    }

    private $users;

    public function addUser($id){
       $this->users[$id]=  new MyUser($id);
    }
    public function getUser($id){
        return $this->users[$id];
    }
    public function getUsers(){
        return $this->users;
    }
}
