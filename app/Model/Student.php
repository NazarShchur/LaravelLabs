<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['id', 'first_name', 'second_name', 'school_id'];

    public $timestamps = false;

    public function sections(){
        return $this->belongsToMany('App\Model\Section');
    }

    public function school(){
        return $this->belongsTo('App\Model\School');
    }




}
