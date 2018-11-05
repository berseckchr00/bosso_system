<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('users_profiles', function (Blueprint $table) {
            $table->integer('profiles_id')->unsigned()->nullable();
            $table->integer('users_id')->unsigned()->nullable();
            $table->integer('status');

            $table->foreign('profiles_id')
                    ->references('id')
                    ->on('profiles');

            $table->foreign('users_id')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_profiles');
    }
}
