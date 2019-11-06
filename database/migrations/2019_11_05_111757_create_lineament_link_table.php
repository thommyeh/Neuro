<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineamentLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineament_link', function (Blueprint $table) {
            $table->integer('lineament_id')->unsigned();
            $table->integer('link_id')->unsigned();
            $table->foreign('lineament_id')->references('id')->on('lineaments')->onDelete('cascade');
            $table->foreign('link_id')->references('id')->on('links')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineament_link');
    }
}
