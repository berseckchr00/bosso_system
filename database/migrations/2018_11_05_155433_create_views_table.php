<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profiles_id')->unsigned()->nullable();
            $table->foreign('profiles_id')
                    ->references('id')
                    ->on('profiles');
            $table->integer('controllers_id')->unsigned()->nullable();
            $table->foreign('controllers_id')
                    ->references('id')
                    ->on('controllers');
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
        Schema::dropIfExists('views');
    }
}
