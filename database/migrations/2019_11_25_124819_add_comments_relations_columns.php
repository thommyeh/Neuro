<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommentsRelationsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
        $table->integer('molecule_id')->unsigned()->nullable();
        $table->foreign('molecule_id')->references('id')->on('molecules')->onDelete('cascade');
        $table->integer('lineament_id')->unsigned()->nullable();
        $table->foreign('lineament_id')->references('id')->on('lineaments')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
