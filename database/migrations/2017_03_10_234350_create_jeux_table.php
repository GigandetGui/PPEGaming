<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeux', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('description');
            $table->date('date_sortie');
            $table->string('photo');
            //$table->integer('fkname_id')->unsigned();
            $table->timestamps();
            $table->engine = "InnoDB";
        });


    }
                    /*
            Schema::table('jeux', function($table) {
            $table->foreign('fkname_id')->references('id')->on('types');
        });
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jeux');
    }
}
