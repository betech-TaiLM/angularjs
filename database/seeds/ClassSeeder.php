<?php

use App\Classes;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::truncate();
        $data = [
            ['id' => '1', 'class_name' => '12A'],
            ['id' => '2', 'class_name' => '12B'],
            ['id' => '3', 'class_name' => '12C'],
            ['id' => '4', 'class_name' => '12D'],
            ['id' => '5', 'class_name' => '12E'],
        ];
        Classes::insert($data);
    }
}
