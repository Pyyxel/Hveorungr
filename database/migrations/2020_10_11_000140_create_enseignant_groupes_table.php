<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant_groupes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('enseignant_id')->unsigned();
            $table->bigInteger('groupe_id')->unsigned();
            $table->timestamps();
            $table->foreign('enseigant_id')->references('id')->on('enseignants')->onDelete('cascade');
            $table->foreign('groupe_id')->references('id')->on('groupe')->onDelete('cascade');         
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignant_groupes');
    }
}
