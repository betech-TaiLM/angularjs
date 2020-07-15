<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'subjects_name',
    ];

    public static function getSubjectNameByID($id)
    {
       $data = self::find('id', $id)->subjects_name;

       return $data;
    }
}
