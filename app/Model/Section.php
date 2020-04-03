<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;

    public function students(){
        return $this->belongsToMany('App\Model\Student');
    }

    public function school(){
        return $this->belongsTo('App\Model\School');
    }

}
