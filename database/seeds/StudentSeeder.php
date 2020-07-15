<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        $data = [
            ['id' => '1', 'name' => 'John', 'gender' => 'Male', 'birthday' => '14/12/2000', 'class_id' => '1'],
            ['id' => '2', 'name' => 'Lily', 'gender' => 'Female', 'birthday' => '27/05/2000', 'class_id' => '2'],
            ['id' => '3', 'name' => 'Michael', 'gender' => 'Male', 'birthday' => '12/08/2000', 'class_id' => '1'],
            ['id' => '4', 'name' => 'William', 'gender' => 'Male', 'birthday' => '02/11/2000', 'class_id' => '3'],
            ['id' => '5', 'name' => 'David', 'gender' => 'Male', 'birthday' => '05/10/2000', 'class_id' => '2'],
        ];
        Student::insert($data);
    }
}
