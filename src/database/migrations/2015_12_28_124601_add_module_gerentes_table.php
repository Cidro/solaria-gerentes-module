<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModuleFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_gerentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 256);
            $table->string('last_name', 256);
            $table->string('email', 256);
            $table->string('position', 256);
            $table->string('phone', 256);
            $table->string('image', 256);
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
        Schema::drop('module_gerentes');
    }
}
