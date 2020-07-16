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
            ['id' => '1', 'name' => 'John', 'gender' => 'Male', 'birthday' => '14/12/2000', 'class' => '12A'],
            ['id' => '2', 'name' => 'Lily', 'gender' => 'Female', 'birthday' => '27/05/2000', 'class' => '12E'],
            ['id' => '3', 'name' => 'Michael', 'gender' => 'Male', 'birthday' => '12/08/2000', 'class' => '12D'],
            ['id' => '4', 'name' => 'William', 'gender' => 'Male', 'birthday' => '02/11/2000', 'class' => '12B'],
            ['id' => '5', 'name' => 'David', 'gender' => 'Male', 'birthday' => '05/10/2000', 'class' => '12A'],
        ];
        Student::insert($data);
    }
}
