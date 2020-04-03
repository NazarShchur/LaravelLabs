<?php


namespace App\Http\Controllers;


use App\Model\MyUser;
use App\Model\UsersDB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $usersDB;
    public function __construct()
    {
     $this->usersDB = UsersDB::getInstance();
    }

    public function getUser($id){
        return view("user", ['obj'=>$this->usersDB->getUser($id), 'all'=>$this->usersDB->getUsers()]);
    }

    public function addUser(Request $request){
        $this->usersDB->addUser($request->id);
        return view("user", ['obj'=>$this->usersDB->getUser($request->id), 'all'=>$this->usersDB->getUsers()]);
    }}
