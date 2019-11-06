<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineamentMoleculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineament_molecule', function (Blueprint $table) {
            $table->integer('lineament_id')->unsigned();
            $table->integer('molecule_id')->unsigned();
            $table->foreign('lineament_id')->references('id')->on('lineaments')->onDelete('cascade');
            $table->foreign('molecule_id')->references('id')->on('molecules')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineament_molecule');
    }
}
