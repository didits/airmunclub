<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mun', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->string('type');
            $table->string('link');
            $table->integer('id_author');
            $table->string('path1');
            $table->string('path2');
            $table->string('path3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mun');
    }
}
