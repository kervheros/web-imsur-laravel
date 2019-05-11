<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewCampsUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users',function($table){
        $table->string('ci');
        $table->string('direccion');
        $table->string('telefono');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users',function($table){
        $table->string('ci');
        $table->string('direccion');
        $table->string('telefono');
      });
    }
}
