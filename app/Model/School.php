<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['id', 'name'];

    public $timestamps = false;

    public function students(){
        return $this->hasMany('App\Model\Student');
    }

    public function sections(){
        return $this->hasMany('App\Model\Section');
    }






}
