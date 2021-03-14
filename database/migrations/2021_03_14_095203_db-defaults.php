<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DbDefaults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::insert('INSERT INTO `courses` (`name`, `slope_rating`, `extra_shots`) VALUES ("Stockwood", 0, 1);');
        DB::insert('INSERT INTO `courses` (`name`, `slope_rating`, `extra_shots`) VALUES ("Woodspring", 0, 0);');
        DB::insert('INSERT INTO `courses` (`name`, `slope_rating`, `extra_shots`) VALUES ("Mendip", 0, 2);');
        DB::insert('INSERT INTO `courses` (`name`, `slope_rating`, `extra_shots`) VALUES ("Farrington", 0, 0);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
