<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'gender', 'birthday', 'class'
    ];

    public function class()
    {
        return $this->hasOne('App\Classes','id','class_id');
    }

    public function score($id)
    {
       return Score::where('student_id', $id)->get()->toArray();
    }

    public $timestamps = false;
}
