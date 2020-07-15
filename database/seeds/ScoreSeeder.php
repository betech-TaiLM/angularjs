<?php

use App\Score;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Score::truncate();
        $data = [
            ['id' => '1', 'score' => '3', 'subjects_id' => '1', 'student_id' => '1'],
            ['id' => '2', 'score' => '10', 'subjects_id' => '2', 'student_id' => '1'],
            ['id' => '3', 'score' => '8', 'subjects_id' => '3', 'student_id' => '1'],
            ['id' => '4', 'score' => '3', 'subjects_id' => '1', 'student_id' => '2'],
            ['id' => '5', 'score' => '9', 'subjects_id' => '2', 'student_id' => '2'],
            ['id' => '6', 'score' => '8', 'subjects_id' => '3', 'student_id' => '2'],
            ['id' => '7', 'score' => '9', 'subjects_id' => '1', 'student_id' => '3'],
            ['id' => '8', 'score' => '5', 'subjects_id' => '2', 'student_id' => '3'],
            ['id' => '9', 'score' => '2', 'subjects_id' => '3', 'student_id' => '3'],
            ['id' => '10', 'score' => '9', 'subjects_id' => '1', 'student_id' => '4'],
            ['id' => '11', 'score' => '7', 'subjects_id' => '2', 'student_id' => '4'],
            ['id' => '12', 'score' => '8', 'subjects_id' => '3', 'student_id' => '4'],
            ['id' => '13', 'score' => '3', 'subjects_id' => '1', 'student_id' => '5'],
            ['id' => '14', 'score' => '6', 'subjects_id' => '2', 'student_id' => '5'],
            ['id' => '15', 'score' => '9', 'subjects_id' => '3', 'student_id' => '5'],
        ];
        Score::insert($data);
    }
}
