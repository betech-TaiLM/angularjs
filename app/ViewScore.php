<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewScore extends Model
{
    protected $table = 'viewscore';

    public static function getScoreByID($id)
    {
        $datas = self::where('id', $id)->select('subject', 'score')->get();
        $scores = collect();
        foreach ($datas as $data) {
            $scores->put($data->subject, $data->score);
        }
        return $scores;
    }

}
