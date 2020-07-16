<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS viewscore');

        DB::statement("CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewscore` AS select `stu`.`id` AS `id`,`stu`.`name` AS `name`,`sub`.`subjects_name` AS `subject`,`sco`.`score` AS `score` from ((`students` `stu` join `subjects` `sub`) join `scores` `sco`) where `sco`.`subjects_id` = `sub`.`id` and `stu`.`id` = `sco`.`student_id`;      ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS viewscore');
    }
}
