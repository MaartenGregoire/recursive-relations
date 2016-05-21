<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTable extends Migration
{

    public function up()
    {
        Schema::create('group', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('parent_id')->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::drop('group');
    }
}
