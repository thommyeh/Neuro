<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkMoleculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_molecule', function (Blueprint $table) {
            $table->integer('link_id')->unsigned();
            $table->integer('molecule_id')->unsigned();
            $table->foreign('link_id')->references('id')->on('links')->onDelete('cascade');
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
        Schema::dropIfExists('link_molecule');
    }
}
