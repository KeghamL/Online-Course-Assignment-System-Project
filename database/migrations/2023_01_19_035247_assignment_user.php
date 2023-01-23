<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AssignmentUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('assignment_user', function (Blueprint $table) {
          $table->increments('id');
          $table->foreignId('assignment_id')->constrained('assignments')
          ->onUpdate('cascade')
          ->onDelete('cascade');
          $table->foreignId('user_id')->constrained('users')
          ->onUpdate('cascade')
          ->onDelete('cascade');
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
        Schema::dropIfExists('assignment_user');
    }
}