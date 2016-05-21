<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    public function up()
    {
        Schema::table('group', function(Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('group')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::table('group', function(Blueprint $table) {
            $table->dropForeign('group_parent_id_foreign');
        });
    }
}
