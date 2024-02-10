<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChessPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `chess_players` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `surname` VARCHAR(50) NOT NULL , `picture` VARCHAR(255) NOT NULL , `gender` INT(1) NOT NULL COMMENT ' male = 1, female = 0' , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `deleted` INT(1) NULL DEFAULT NULL COMMENT ' 1-deleted' , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chess_players', function (Blueprint $table) {
            //
        });
    }
}
