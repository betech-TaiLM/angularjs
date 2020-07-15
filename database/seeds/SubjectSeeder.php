<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::truncate();
        $data = [
            ['id' => '1', 'subjects_name' => 'Math'],
            ['id' => '2', 'subjects_name' => 'Science'],
            ['id' => '3', 'subjects_name' => 'English'],
        ];
        Subject::insert($data);
    }
}
