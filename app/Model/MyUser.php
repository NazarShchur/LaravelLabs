<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
   public function __construct($id)
    {
        $this->id = $id;
    }

    private $id;

    public function getId(){
        return $this->id;
    }

}
